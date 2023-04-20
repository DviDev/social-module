<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Entities\SocialGroup\SocialGroupVisibilityEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_groups', function (Blueprint $table) {
            $table->id();

            $prop = SocialGroupEntityModel::props(null, true);
            $table->foreignId($prop->workspace_id)
                ->references('id')->on('workspaces')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->enum($prop->visibility, SocialGroupVisibilityEnum::toArray())->default('public');
            $table->string($prop->name, 100);
            $table->string($prop->cover_image_path)->nullable();

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
        Schema::dropIfExists('social_groups');
    }
};