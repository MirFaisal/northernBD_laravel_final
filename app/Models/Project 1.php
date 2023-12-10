<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    function category_name($id)
    {
        $category_name = Category::find($id);
        return $category_name->name;
        // return $id;
    }
    function project_name($id)
    {
        $project_name = Project::find($id);
        return $project_name->project_name;
        // return $id;
    }

    public function setSlugAttribute($id)
    {
        $category_name = Category::find($id);
        return Str::slug($category_name->name);

    }
}