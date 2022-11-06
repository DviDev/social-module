<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_user_followers', function (Blueprint $table) {
            $table->id();

            $prop = SocialUserFollowerEntityModel::props(null, true);
            $table->bigInteger($prop->user_id)->unsigned();
            $table->bigInteger($prop->follower_id)->unsigned();
            $table->boolean($prop->notification_enabled)->nullable()->default(1);
            $table->timestamp($prop->created_at);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_user_followers');
    }
};
