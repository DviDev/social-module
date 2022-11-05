<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Person\Entities\PersonFollowUserEntityModel;

class CreatePersonFollowUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_follow_users', function (Blueprint $table) {
            $table->id();

            $prop = PersonFollowUserEntityModel::props(null, true);
            $table->bigInteger($prop->user_id)->unsigned();
            $table->bigInteger($prop->following_user_id)->unsigned();
            $table->timestamp($prop->created_at)->useCurrent();
            $table->timestamp($prop->updated_at)->useCurrent();
            $table->timestamp($prop->deleted_at)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_follow_users');
    }
}
