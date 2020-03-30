<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insertar_datos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alumno');
            $table->string('ENa');
            $table->string('ENf');
            $table->string('ENr');   
            $table->string('IOTa');
            $table->string('IOTf');
            $table->string('IOTr');
            $table->string('DMa');
            $table->string('DMf');
            $table->string('DMr');
            $table->string('EOYEa');
            $table->string('EOYEf');
            $table->string('EOYEr');
            $table->string('INa');
            $table->string('INf');
            $table->string('INr');
            $table->string('AWa');
            $table->string('AWf');
            $table->string('AWr');  
            $table->string('BDa');
            $table->string('BDf');
            $table->string('BDr');
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
