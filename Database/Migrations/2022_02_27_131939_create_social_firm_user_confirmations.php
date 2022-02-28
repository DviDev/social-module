<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->bigInteger('social_firm_user_id');
            $table->string('hash');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
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
