<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialUserFollowers extends Migration
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

            $table->bigInteger('user_id');
            $table->bigInteger('follower_id');
            $table->boolean('notification_enabled')->nullable()->default(1);
            $table->timestamp('created_at')->useCurrent();
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
}
