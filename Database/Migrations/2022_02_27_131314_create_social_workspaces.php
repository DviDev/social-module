<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;

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
            $table->char($prop->visibility)->default('public');// SocialWorkspaceVisibilityEnum::toArray())
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
