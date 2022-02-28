<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialFirmUserConfirmationEntityModel;

class CreateSocialFirmUserConfirmations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_firm_user_confirmations', function (Blueprint $table) {
            $table->id();

            $prop = SocialFirmUserConfirmationEntityModel::props(null, true);
            $table->bigInteger($prop->social_firm_user_id)->unsigned();
            $table->string($prop->hash);
            $table->timestamp($prop->confirmed_at)->nullable();
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
        Schema::dropIfExists('social_firm_user_confirmations');
    }
}
