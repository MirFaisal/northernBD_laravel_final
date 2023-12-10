<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use File;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    // index
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view("components.all-project-list", compact("projects"));
    }
    public function create()
    {
        $categories = Category::all();
        return view("components.add-project", compact("categories"));
    }

    //store project
    public function store(Request $request)
    {

        // dd($request->all());
        // for feature image
        $feature_image_name = '';

        if ($thumbnail = $request->file('feature_image')) {
            $feature_image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/feature_images', $feature_image_name);
        }

        // for images_1
        $project_image_1_name = '';

        if ($thumbnail = $request->file('project_image_1')) {
            $project_image_1_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/images', $project_image_1_name);

        }

        // for image_2
        $project_image_2_name = '';

        if ($thumbnail = $request->file('project_image_2')) {
            $project_image_2_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/images', $project_image_2_name);
        }

        $project = new Project();
        $project->project_name = $request->project_name;
        $project->client_name = $request->client_name;
        $project->description = $request->description;
        $project->category_id = $request->category_id;
        $project->site_size = $request->site_size;
        $project->planning_approved = $request->planning_approved;
        $project->number_of_homes = $request->number_of_homes;
        $project->feature_image = $feature_image_name;
        $project->project_image_1 = $project_image_1_name;
        $project->project_image_2 = $project_image_2_name;
        $project->save();

        return redirect()->back();
    }

    // update view
    public function show($id)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $project = Project::find($id);
        return view('components.update-project', compact(['project', 'categories']));
    }

    // update
    public function update(Request $request, $project_id)
    {
        $project = Project::find($project_id);

        // feature image update
        $feature_image_name = '';
        $oldImage = 'project/feature_images' . $project->feature_image;

        if ($thumbnail = $request->file('feature_image')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $feature_image_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/feature_images', $feature_image_name);
        } else {
            $feature_image_name = $project->feature_image;
        }

        // image_1
        $project_image_1_name = '';
        $oldImage = 'project/images' . $project->project_image_1;
        if ($thumbnail = $request->file('project_image_1')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $project_image_1_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/images', $project_image_1_name);
        } else {
            $project_image_1_name = $project->project_image_1;
        }

        // image_2
        $project_image_2_name = '';
        $oldImage = 'project/images' . $project->project_image_2;
        if ($thumbnail = $request->file('project_image_2')) {
            if (file_exists($oldImage)) {
                File::delete($oldImage);
            }
            $project_image_2_name = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('project/images', $project_image_2_name);
        } else {
            $project_image_2_name = $project->project_image_2;
        }


        $project->project_name = $request->project_name;
        $project->client_name = $request->client_name;
        $project->description = $request->description;
        $project->category_id = $request->category_id;
        $project->site_size = $request->site_size;
        $project->planning_approved = $request->planning_approved;
        $project->number_of_homes = $request->number_of_homes;
        $project->feature_image = $feature_image_name;
        $project->project_image_1 = $project_image_1_name;
        $project->project_image_2 = $project_image_2_name;
        $project->save();

        return redirect()->back();

    }
    // delete project
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back();
    }
}
