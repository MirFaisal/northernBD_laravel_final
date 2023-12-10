<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function project()
    {
        return $this->hasMany(Project::class);
    }

    function category_name($id)
    {
        $category_name = Category::find($id);
        return $category_name->name;
    }
    public function setSlugAttribute($id)
    {
        $category_name = Category::find($id);
        return Str::slug($category_name->name);

    }

}
