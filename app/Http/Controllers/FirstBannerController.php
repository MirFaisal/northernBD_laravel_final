<?php

namespace App\Http\Controllers;

use File;
use App\Models\FirstBanner;
use Illuminate\Http\Request;

class FirstBannerController extends Controller
{
    //
    public function index()
    {
        $firstBanner = FirstBanner::orderBy('id', 'DESC')->get();
        return view("components.first-banner-list", compact("firstBanner"));
    }
    public function create()
    {
        return view("components.add-first-banner");
    }
    public function store(Request $request)
    {

        // dd($request->all());
        $image_name = '';

        if ($thumbnail = $request->file('banner_image')) {
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/banner', $image_name);
        }

        $banner = new FirstBanner();
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->banner_image = $image_name;
        $banner->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $firstBanner = FirstBanner::find($id);
        return view('components.update-first-banner', compact('firstBanner'));
    }
    public function update(Request $request, $id)
    {
        $banner = FirstBanner::find($id);

        $image_name = '';
        $oldImage = 'project/banner/' . $banner->banner_image;

        if ($thumbnail = $request->file('banner_image')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/banner', $image_name);
        } else {
            $image_name = $banner->banner_image;
        }

        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->banner_image = $image_name;
        $banner->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
        $banner = FirstBanner::find($id);
        $banner->delete();
        return redirect()->back();
    }
}
