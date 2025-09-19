<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPageFollower\SocialPageFollowerEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_page_followers', function (Blueprint $table) {
            $table->id();

            $p = SocialPageFollowerEntityModel::props(null, true);
            $table->foreignId($p->page_id)
                ->references('id')->on('social_pages')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($p->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp($p->created_at)->useCurrent();
            $table->timestamp($p->updated_at)->useCurrent()->useCurrentOnUpdate();
            $table->timestamp($p->deleted_at)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('social_page_followers');
    }
};
