<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialPagePostEntityModel;

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
