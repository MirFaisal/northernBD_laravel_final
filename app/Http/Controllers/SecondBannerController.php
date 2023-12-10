<?php

namespace App\Http\Controllers;

use File;
use App\Models\SecondBanner;
use Illuminate\Http\Request;

class SecondBannerController extends Controller
{
    //
    public function index()
    {
        $secondBanner = SecondBanner::orderBy('id', 'DESC')->get();
        return view("components.second-banner-list", compact("secondBanner"));
    }
    public function create()
    {
        return view("components.add-second-banner");
    }
    public function store(Request $request)
    {

        $image_name = '';

        if ($thumbnail = $request->file('banner_image')) {
            $image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/banner/', $image_name);
        }

        $banner = new SecondBanner();
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->banner_image = $image_name;
        $banner->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $secondBanner = SecondBanner::find($id);
        return view('components.update-second-banner', compact('secondBanner'));
    }
    public function update(Request $request, $id)
    {
        $banner = SecondBanner::find($id);

        $image_name = '';
        $oldImage = 'project/banner' . $banner->banner_image;

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
        $banner = SecondBanner::find($id);
        $banner->delete();
        return redirect()->back();
    }
}
