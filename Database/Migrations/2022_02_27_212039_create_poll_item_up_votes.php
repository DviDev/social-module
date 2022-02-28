<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialPollItemEntityModel;
use Modules\Social\Entities\SocialPollItemUpVoteEntityModel;

class CreatePollItemUpVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_poll_item_up_votes', function (Blueprint $table) {
            $table->id();

            $prop = SocialPollItemUpVoteEntityModel::props(null, true);
            $table->bigInteger($prop->poll_item_id)->unsigned();
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
        Schema::dropIfExists('social_poll_item_up_votes');
    }
}
