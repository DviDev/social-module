<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialPostVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_post_votes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('post_id');
            $table->bigInteger('user_id');
            $table->char('up_vote', 1);
            $table->char('down_vote', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_post_votes');
    }
}
