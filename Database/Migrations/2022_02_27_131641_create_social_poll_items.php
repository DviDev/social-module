<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialPollItemEntityModel;

class CreateSocialPollItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_poll_items', function (Blueprint $table) {
            $table->id();

            $prop = SocialPollItemEntityModel::props(null, true);
            $table->bigInteger($prop->poll_id)->unsigned();
            $table->string($prop->name, 80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_poll_items');
    }
}
