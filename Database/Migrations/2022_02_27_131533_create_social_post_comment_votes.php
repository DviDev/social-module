<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialPostCommentVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_post_comment_votes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('comment_id');
            $table->bigInteger('user_id');
            $table->tinyInteger('up_vote');
            $table->tinyInteger('down_vote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_post_comment_votes');
    }
}
