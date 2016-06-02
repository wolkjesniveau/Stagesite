<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagetoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagetools', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tools_id');
            $table->foreign('tools_id')->references('id')->on('tools');
            $table->unsignedInteger('stage_user_id');
            $table->foreign('stage_user_id')->references('id')->on('stage_user');
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::drop('stagetools');
    }
}
