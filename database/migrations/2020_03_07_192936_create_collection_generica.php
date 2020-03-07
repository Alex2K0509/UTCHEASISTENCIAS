<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionGenerica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_generica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Id_Asignatura');
            $table->string('matricula_alumno');
            $table->string('matricula_maestro');
            $table->string('Id_grupo');
            $table->string('plan');
            $table->string('Id_carrera');
            $table->string('periodo');
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
        Schema::dropIfExists('collection_generica');
    }
}
