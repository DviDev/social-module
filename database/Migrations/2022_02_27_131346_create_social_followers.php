<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_followers', function (Blueprint $table) {
            $table->id();

            $p = SocialUserFollowerEntityModel::props(null, true);
            $table->foreignId($p->user_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId($p->follower_id)
                ->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->boolean($p->notification_enabled)->nullable()->default(1);
            $table->timestamp($p->created_at)->useCurrent();
            $table->timestamp($p->updated_at)->useCurrent()->useCurrentOnUpdate();
            $table->timestamp($p->deleted_at)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('social_followers');
    }
};
