<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialGroupUserEntityModel;

class CreateSocialGroupUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_group_users', function (Blueprint $table) {
            $table->id();

            $prop = SocialGroupUserEntityModel::props(null, true);
            $table->bigInteger($prop->group_id)->unsigned();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->timestamp($prop->created_at)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_group_users');
    }
}
