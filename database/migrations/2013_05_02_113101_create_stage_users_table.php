<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStageUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_users', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('stage_id')->references('id')->on('stages');
            $table->unsignedInteger('stage_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('user_id');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stage_users');
    }
}
