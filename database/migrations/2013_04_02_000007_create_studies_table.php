<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_study');
            $table->unsignedInteger('school_location_id');
            $table->foreign('school_location_id')->references('id')->on('school_locations');
            $table->unsignedInteger('cohort_id');
            $table->foreign('cohort_id')->references('id')->on('cohorts');
            $table->unsignedInteger('crebo_id');
            $table->foreign('crebo_id')->references('id')->on('crebos');
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
        Schema::drop('studies');
    }
}
