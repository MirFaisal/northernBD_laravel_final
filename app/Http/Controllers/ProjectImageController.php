<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectImageController extends Controller
{
    //
    function index()
    {
        $projectImages = ProjectImage::all();
        return view('components.all-project-images', compact('projectImages'));
    }

    function create()
    {
        $projects = Project::all();
        return view('components.add-project-images', compact('projects'));
    }

    function store(Request $request)
    {
        $id = $request->project_id;
        // dd($id);
        // $projectImages = ProjectImage::create($request->except(['images', 'project_id']));
        $projectImage = new ProjectImage();
        $imageNames = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('project/pi/', $imageName);

                $imageNames[] = $imageName;

                ProjectImage::create([
                    'project_id' => $request->project_id,
                    'image_path' => $imageName,
                ]);
            }
        }



        return redirect()->back();

    }

    function destroy($id)
    {
        $project = ProjectImage::where('project_id', $id);
        $project->delete();
        return redirect()->back();
    }
}
