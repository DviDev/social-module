<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_pages', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('workspace_id');
            $table->bigInteger('created_by_user_id');
            $table->enum('visibility', ['public','private'])->default('public');
            $table->string('name', 150);
            $table->string('image_cover_path', 150);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_pages');
    }
}