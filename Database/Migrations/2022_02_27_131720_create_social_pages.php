<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Entities\SocialPage\SocialPageVisibilityEnum;

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

            $p = SocialPageEntityModel::props(null, true);
            $table->foreignId($p->workspace_id)
                ->references('id')->on('workspaces')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($p->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->enum($p->visibility, SocialPageVisibilityEnum::toArray())->default('public');
            $table->string($p->name, 150);
            $table->string($p->image_cover_path, 150)->nullable();

            $table->timestamp($p->created_at)->useCurrent();
            $table->timestamp($p->updated_at)->useCurrent()->useCurrentOnUpdate();
            $table->timestamp($p->deleted_at)->nullable();

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
