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
            $table->foreign('internship_user_id')->references('id')->on('internship_users');
            $table->unsignedInteger('internship_user_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->unsignedInteger('status_id');
            $table->longText('review');
            $table->decimal('3,1');
            $table->increments('id');
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
