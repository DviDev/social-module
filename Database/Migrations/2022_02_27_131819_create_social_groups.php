<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Nwidart\Modules\Facades\Module;

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

            $p = SocialGroupEntityModel::props(null, true);
            $table->unsignedBigInteger($p->workspace_id);
            if (collect(Module::allEnabled())->contains('Workspace')) {
                $table->foreign($p->workspace_id)->references('id')->on('workspaces')
                    ->cascadeOnUpdate()->restrictOnDelete();
            }
            $table->foreignId($p->user_id)->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->char($p->visibility)->default('public'); //, SocialGroupVisibilityEnum::toArray())
            $table->string($p->name, 100);
            $table->string($p->cover_image_path)->nullable();

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
        Schema::dropIfExists('social_groups');
    }
};
