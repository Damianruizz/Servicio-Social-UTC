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
            $table->string('company');
            $table->string('responsable1');
            $table->string('responsable2');
            $table->string('responsable3');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('tel3');
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
            $table->string('address');
            $table->rememberToken();
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
        //
    }
}
