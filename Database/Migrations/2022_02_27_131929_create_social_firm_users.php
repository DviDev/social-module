<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->bigInteger('firm_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('active')->unsigned()->nullable();
            $table->bigInteger('owner_id')->unsigned()->nullable();
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
