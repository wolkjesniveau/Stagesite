<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam', 45)->nullable(false)->change();
            $table->string('address', 45)->nullable(false)->change();
            $table->string('postcode', 7)->nullable(false)->change();
            $table->string('plaats', 45)->nullable(false)->change();
            $table->string('telnr', 45)->nullable(false)->change();
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
        Schema::drop('companies');
    }
}
