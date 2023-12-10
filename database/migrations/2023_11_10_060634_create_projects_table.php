<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('client_name');
            $table->string('description');
            $table->foreignIdFor(Category::class, 'category_id');
            $table->string('site_size')->nullable();
            $table->date('planning_approved');
            $table->string('number_of_homes')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('project_image_1')->nullable();
            $table->string('project_image_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
