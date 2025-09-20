<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Nwidart\Modules\Facades\Module;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_pages', function (Blueprint $table): void {
            $table->id();

            $p = SocialPageEntityModel::props(null, true);
            $table->unsignedBigInteger($p->workspace_id);
            if (collect(Module::allEnabled())->contains('Workspace')) {
                $table->foreign($p->workspace_id)->references('id')->on('workspaces')
                    ->cascadeOnUpdate()->restrictOnDelete();
            }
            $table->foreignId($p->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->char($p->visibility)->default('public'); // SocialPageVisibilityEnum::toArray()
            $table->string($p->name, 150);
            $table->string($p->image_cover_path, 150)->nullable();

            $table->timestamp($p->created_at)->useCurrent();
            $table->timestamp($p->updated_at)->useCurrent()->useCurrentOnUpdate();
            $table->timestamp($p->deleted_at)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_pages');
    }
};
