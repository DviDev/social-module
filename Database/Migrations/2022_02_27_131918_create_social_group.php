<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialGroupEntityModel;

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

            $prop = SocialGroupEntityModel::props(null, true);
            $table->bigInteger($prop->workspace_id)->unsigned();
            $table->enum($prop->visibility, ['public','private'])->default('public');
            $table->string($prop->name, 100);
            $table->string($prop->cover_image_path)->nullable();
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
