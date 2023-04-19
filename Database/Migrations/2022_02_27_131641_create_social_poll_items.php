<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPollItem\SocialPollItemEntityModel;

return new class extends Migration
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
            $table->foreignId($prop->poll_id)
                ->references('id')->on('social_polls')
                ->cascadeOnUpdate()->restrictOnDelete();
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
};
