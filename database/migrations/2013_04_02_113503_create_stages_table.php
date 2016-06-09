<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            $table->date('begin_DATE');
            $table->date('eind_DATE');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->unsignedInteger('contact_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->unsignedInteger('status_id');
            $table->foreign('study_id')->references('id')->on('studies');
            $table->unsignedInteger('study_id');
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
        Schema::drop('stages');
    }
}
