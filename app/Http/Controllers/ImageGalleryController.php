<?php

namespace App\Http\Controllers;

use File;
use App\Models\ImageGallery;
use Illuminate\Http\Request;

class ImageGalleryController extends Controller
{
    //
    public function index()
    {
        $images = ImageGallery::orderBy('id', 'DESC')->get();
        return view("components.all-images", compact("images"));
    }
    public function create()
    {
        return view("components.add-images");
    }
    public function store(Request $request)
    {
        $image_name = '';

        if ($thumbnail = $request->file('image')) {
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/gallery/', $image_name);
        }

        $images = new ImageGallery();
        $images->name = $request->name;
        $images->location = $request->location;
        $images->image = $image_name;
        $images->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $image = ImageGallery::find($id);
        return view('components.update-image', compact('image'));
    }
    public function update(Request $request, $id)
    {
        $image = ImageGallery::find($id);

        $image_name = '';
        $oldImage = 'project/gallery' . $image->image;

        if ($thumbnail = $request->file('image')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/gallery', $image_name);
        } else {
            $image_name = $image->image;
        }

        $image->name = $request->name;
        $image->location = $request->location;
        $image->image = $image_name;
        $image->save();
        return redirect()->back();

    }
    public function destroy($id)
    {
        $image = ImageGallery::find($id);
        $image->delete();
        return redirect()->back();
    }


}
