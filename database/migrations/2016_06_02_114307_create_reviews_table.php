<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('stage_user_id')->references('id')->on('stage_users');
            $table->unsignedInteger('stage_user_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->unsignedInteger('status_id');
            $table->longText('review');
            $table->decimal('3,1');
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
        Schema::drop('reviews');
    }
}
