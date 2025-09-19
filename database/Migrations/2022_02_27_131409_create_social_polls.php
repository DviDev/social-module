<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Social\Entities\SocialPoll\SocialPollEntityModel;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_polls', function (Blueprint $table) {
            $table->id();

            $p = SocialPollEntityModel::props(null, true);
            $table->string($p->description);
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
        Schema::dropIfExists('social_polls');
    }
};
