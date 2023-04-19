<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceVisibilityEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_workspaces', function (Blueprint $table) {
            $table->id();

            $prop = SocialWorkspaceEntityModel::props(null, true);
            $table->foreignId($prop->workspace_id)
                ->references('id')->on('workspaces')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->enum($prop->visibility, SocialWorkspaceVisibilityEnum::toArray())->default('public');
            $table->foreignId($prop->owner_user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_workspaces');
    }
};
