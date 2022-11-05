<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialWorkspaceEntityModel;

class CreateSocialWorkspaces extends Migration
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
}
