<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_group', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('workspace_id');
            $table->enum('visibility', ['public','private'])->default('public');
            $table->string('name', 100);
            $table->string('cover_image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_group');
    }
}
