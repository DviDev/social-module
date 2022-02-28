<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialGroupPostCommentEntityModel;

class CreateSocialGroupPostComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_group_post_comments', function (Blueprint $table) {
            $table->id();

            $prop = SocialGroupPostCommentEntityModel::props(null, true);
            $table->bigInteger($prop->group_post_id)->unsigned();
            $table->text($prop->comment);
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
        Schema::dropIfExists('social_group_post_comments');
    }
}
