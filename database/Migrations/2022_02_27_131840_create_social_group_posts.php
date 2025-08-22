<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! collect(\Nwidart\Modules\Facades\Module::allEnabled())->contains('Post')) {
            return;
        }
        Schema::create('social_group_threads', function (Blueprint $table) {
            $table->id();

            $prop = SocialGroupPostEntityModel::props(null, true);
            $table->foreignId($prop->group_id)
                ->references('id')->on('social_groups')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->post_id)
                ->references('id')->on('threads')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_group_threads');
    }
};
