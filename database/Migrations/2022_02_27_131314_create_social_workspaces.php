<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;
use Nwidart\Modules\Facades\Module;

return new class extends Migration
{
    public function up()
    {
        if (! collect(Module::allEnabled())->contains('Workspace')) {
            return;
        }
        Schema::create('social_workspaces', function (Blueprint $table) {
            $table->id();

            $prop = SocialWorkspaceEntityModel::props(null, true);
            $table->foreignId($prop->workspace_id)
                ->references('id')->on('workspaces')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->char($prop->visibility)->default('public'); // SocialWorkspaceVisibilityEnum::toArray())
            $table->foreignId($prop->owner_user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    public function down()
    {
        if (! collect(Module::allEnabled())->contains('Workspace')) {
            return;
        }
        Schema::dropIfExists('social_workspaces');
    }
};
