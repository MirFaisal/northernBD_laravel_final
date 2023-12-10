<?php
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FirstBannerController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SecondBannerController;
use App\Models\Category;
use App\Models\FirstBanner;
use App\Models\ImageGallery;
use App\Models\Message;
use App\Models\Post;
use App\Models\Project;
use App\Models\SecondBanner;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $projects = Project::orderBy('id', 'DESC')->take(5)->get();
    // $banner = Project::orderBy('id', 'DESC')->take(3)->get();
    $firstBanner = FirstBanner::orderBy('id', 'DESC')->take(3)->get();
    $secondBanner = SecondBanner::orderBy('id', 'DESC')->take(3)->get();
    $posts = Post::orderBy('id', 'DESC')->take(3)->get();
    // dd($posts);
    return view('welcome', compact(['projects', 'firstBanner', 'secondBanner', 'posts']));
})->name('HOME::PAGE');

Route::get('/about', function () {
    return view('pages.about');
})->name('ABOUT::PAGE');

Route::get('/services', function () {
    return view('pages.services');
})->name('SERVICES::PAGE');

Route::get('/projects', function () {

    $projects = Project::orderBy('id', 'DESC')->get();
    $categories = Category::orderBy('id', 'DESC')->get();
    return view('pages.projects', compact(['projects', 'categories']));
})->name('PROJECTS::PAGE');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('CONTACTS::PAGE');


// sub categorys
Route::get('/team', function () {
    return view('pages.team');
})->name('TEAM::PAGE');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('TESTIMONIALS::PAGE');

Route::get('/clients', function () {
    return view('pages.clients');
})->name('CLIENTS::PAGE');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('FAQS::PAGE');

Route::get('/images-gallery', function () {
    $images = ImageGallery::all();
    $totalRecords = $images->count();
    $chunkSize = ceil($totalRecords / 3);

    $chunks = $images->chunk($chunkSize);

    $firstSlot = $chunks[0];
    $secondSlot = $chunks[1];
    $lastedSlot = $chunks[2];
    return view('pages.images-gallery', compact(['firstSlot', 'secondSlot', 'lastedSlot']));
})->name('IMAGES::GALLERY::PAGE');

Route::get('/single-project/{project_id}', function ($project_id) {
    $project = Project::where('id', $project_id)->first();
    // dd($project);
    return view('pages.single-project', compact('project'));
})->name('SINGLE::PROJECT');


Route::get('/single-post/{post_id}', function ($id) {
    $post = Post::where('id', $id)->first();
    return view('pages.single-post', compact('post'));
})->name('SINGLE::POST');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// 

Route::get('/dashboard', function () {
    $messages = Message::orderBy('id', 'desc')->get();
    return view('dashboard', compact('messages'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // project
    Route::get('/all-project', [ProjectController::class, 'index'])->name("ALL::PROJECT");
    Route::get("/add-project", [ProjectController::class, "create"])->name("ADD::PROJECT");
    Route::post("/store/project", [ProjectController::class, "store"])->name("STORE::PROJECT");

    Route::get("project/{project_id}", [ProjectController::class, "show"])->name("SHOW::PROJECT");
    Route::post("/update-project/{project_id}", [ProjectController::class, "update"])->name("UPDATE::PROJECT");

    Route::get("project/delete/{project_id}", [ProjectController::class, "destroy"])->name("REMOVE::PROJECT");

    // caregory
    Route::get('/all-categories', [CategoryController::class, 'index'])->name('ALL::CATEGORIES');
    Route::get('/add-category', [CategoryController::class, 'create'])->name('ADD::CATEGORY');
    Route::post('/store/category', [CategoryController::class, 'store'])->name('STORE::CATEGORY');
    Route::get('category/{category_id}', [CategoryController::class, 'show'])->name('SHOW::CATEGORY');
    Route::post('/update-category/{category_id}', [CategoryController::class, 'update'])->name('UPDATE::CATEGORY');
    Route::get("category/delete/{category_id}", [CategoryController::class, "destroy"])->name("REMOVE::CATEGORY");

    // first banner
    Route::get('/first-banner', [FirstBannerController::class, 'index'])->name('ALL::FIRST::BANNER');
    Route::get('/add-first-banner', [FirstBannerController::class, 'create'])->name('ADD::FIRST::BANNER');
    Route::post('store/first/banner', [FirstBannerController::class, 'store'])->name('STORE::FIRST::BANNER');
    Route::get('banner/first/{first_banner_id}', [FirstBannerController::class, 'show'])->name('SHOW::FIRST::BANNER');
    Route::post('update/first/banner/{banner_id}', [FirstBannerController::class, 'update'])->name('UPDATE::FIRST::BANNER');
    Route::get('delete/first-banner/{first_banner_id}', [FirstBannerController::class, 'destroy'])->name('DELETE::FIRST::BANNER');

    // second banner
    Route::get('/second-banner', [SecondBannerController::class, 'index'])->name('ALL::SECOND::BANNER');
    Route::get('/add-second-banner', [SecondBannerController::class, 'create'])->name('ADD::SECOND::BANNER');
    Route::post('store/second/banner', [SecondBannerController::class, 'store'])->name('STORE::SECOND::BANNER');
    Route::get('banner/second/{second_banner_id}', [SecondBannerController::class, 'show'])->name('SHOW::SECOND::BANNER');
    Route::post('update/second/banner/{second_banner_id}', [SecondBannerController::class, 'update'])->name('UPDATE::SECOND::BANNER');
    Route::get('delete/second-banner/{second_banner_id}', [SecondBannerController::class, 'destroy'])->name('DELETE::SECOND::BANNER');

    //images
    Route::get('all-images', [ImageGalleryController::class, 'index'])->name('ALL::IMAGES');
    Route::get('add-images', [ImageGalleryController::class, 'create'])->name('ADD::IMAGES');
    Route::post('store-image', [ImageGalleryController::class, 'store'])->name('STORE::IMAGE');
    Route::get('image/{image_id}', [ImageGalleryController::class, 'show'])->name('SHOW::IMAGE');
    Route::post('image/update/{image_id}', [ImageGalleryController::class, 'update'])->name('UPDATE::IMAGE');
    Route::get('image/delete/{image_id}', [ImageGalleryController::class, 'destroy'])->name('DELTE::IMAGE');

    // MESSAGE
    Route::post('send-message', [MessageController::class, 'store'])->name('SEND::MESSAGE');

    // news
    Route::get('all-news', [PostController::class, 'index'])->name('ALL::NEWS');
    Route::get('add-news', [PostController::class, 'create'])->name('ADD::NEWS');
    Route::post('store-news', [PostController::class, 'store'])->name('STORE::NEWS');
    Route::get('news/{news_id}', [PostController::class, 'show'])->name('SHOW::NEWS');
    Route::post('update/news/{news_id}', [PostController::class, 'update'])->name('UPDATE::NEWS');
    Route::get('delete/news/{news_id}', [PostController::class, 'destroy'])->name('DELETE::NEWS');



});

require __DIR__ . '/auth.php';
