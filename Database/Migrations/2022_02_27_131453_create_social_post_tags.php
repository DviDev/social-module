<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialPostTagEntityModel;

class CreateSocialPostTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_post_tags', function (Blueprint $table) {
            $table->id();

            $prop = SocialPostTagEntityModel::props(null, true);
            $table->bigInteger($prop->post_id)->unsigned();
            $table->string($prop->tag, 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_post_tags');
    }
}
