<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialPostCommentEntityModel;

class CreateSocialPostComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_post_comments', function (Blueprint $table) {
            $table->id();

            $prop = SocialPostCommentEntityModel::props(null, true);
            $table->bigInteger($prop->post_id)->unsigned();
            $table->bigInteger($prop->parent_id)->unsigned()->nullable();
            $table->text($prop->content);
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
        Schema::dropIfExists('social_post_comments');
    }
}
