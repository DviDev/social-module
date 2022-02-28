<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Social\Entities\SocialFirmUserEntityModel;

class CreateSocialFirmUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_firm_users', function (Blueprint $table) {
            $table->id();

            $prop = SocialFirmUserEntityModel::props(null, true);
            $table->bigInteger($prop->firm_id)->unsigned();
            $table->bigInteger($prop->user_id)->unsigned();
            $table->boolean($prop->active)->unsigned()->nullable();
            $table->bigInteger($prop->owner_id)->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_firm_users');
    }
}
