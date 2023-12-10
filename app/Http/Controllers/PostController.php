<?php

namespace App\Http\Controllers;

use File;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $posts = Post::orderBy("created_at", "desc")->get();
        return view("components.all-posts", compact("posts"));
    }

    function create()
    {
        return view("components.add-post");
    }

    function store(Request $request)
    {
        // dd($request->all());

        $image_name = '';

        if ($thumbnail = $request->file('image')) {
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/images', $image_name);
        }

        $post = new Post();
        $post->name = $request->name;
        $post->first_article = $request->first_article;
        $post->second_article = $request->second_article;
        $post->image = $image_name;
        $post->save();

        return redirect()->back();


    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('components.update-post', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $image_name = '';
        $oldImage = 'project/images/' . $post->image;

        if ($thumbnail = $request->file('image')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/images', $image_name);
        } else {
            $image_name = $post->image;
        }

        $post->name = $request->name;
        $post->first_article = $request->first_article;
        $post->second_article = $request->second_article;
        $post->image = $image_name;
        $post->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
