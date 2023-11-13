<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!collect(\Nwidart\Modules\Facades\Module::allEnabled())->contains('Post')) {
            return;
        }

        Schema::create('social_page_posts', function (Blueprint $table) {
            $table->id();

            $prop = SocialPagePostEntityModel::props(null, true);
            $table->foreignId($prop->page_id)
                ->references('id')->on('social_pages')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->post_id)
                ->references('id')->on('posts')
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
        Schema::dropIfExists('social_page_posts');
    }
};
