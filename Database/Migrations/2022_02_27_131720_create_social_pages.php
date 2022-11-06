<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;

return new class extends Migration
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

            $prop = SocialPageEntityModel::props(null, true);
            $table->bigInteger($prop->workspace_id)->unsigned();
            $table->bigInteger($prop->created_by_user_id)->unsigned();
            $table->enum($prop->visibility, ['public','private'])->default('public');
            $table->string($prop->name, 150);
            $table->string($prop->image_cover_path, 150)->nullable();

            $table->timestamps();
            $table->softDeletes();
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
};
