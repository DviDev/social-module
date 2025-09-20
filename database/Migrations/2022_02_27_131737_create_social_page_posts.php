<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;
use Nwidart\Modules\Facades\Module;

return new class extends Migration
{
    public function up()
    {
        if (Module::isDisabled('Post')) {
            return;
        }

        Schema::create('social_page_threads', function (Blueprint $table): void {
            $table->id();

            $prop = SocialPagePostEntityModel::props(null, true);
            $table->foreignId($prop->page_id)
                ->references('id')->on('social_pages')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($prop->post_id)
                ->references('id')->on('threads')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_page_threads');
    }
};
