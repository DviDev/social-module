<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostEntityModel;

class CreateSocialGroupPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_group_posts', function (Blueprint $table) {
            $table->id();

            $prop = SocialGroupPostEntityModel::props(null, true);
            $table->bigInteger($prop->group_id)->unsigned();
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
        Schema::dropIfExists('social_group_posts');
    }
}
