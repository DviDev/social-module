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
            $table->bigInteger($prop->workspace_id);
            $table->enum($prop->visibility, ['public','private'])->default('public');
            $table->bigInteger($prop->owner_user_id)->unsigned();
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
