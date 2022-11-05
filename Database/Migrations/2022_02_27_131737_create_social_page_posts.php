<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;

class CreateSocialPagePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_page_posts', function (Blueprint $table) {
            $table->id();

            $prop = SocialPagePostEntityModel::props(null, true);
            $table->bigInteger($prop->page_id)->unsigned();
            $table->bigInteger($prop->post_id)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_page_posts');
    }
}
