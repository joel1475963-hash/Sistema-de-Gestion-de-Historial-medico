<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EvaluacionFisica', function (Blueprint $table) {
            $table->id('idEvaluacion');
        $table->unsignedBigInteger('idPaciente');
        $table->unsignedBigInteger('idUsuario');
        $table->text('Descripcion');
        $table->dateTime('fechaRegistro');

        $table->foreign('idPaciente')
              ->references('idPaciente')
              ->on('pacientes');

        $table->foreign('idUsuario')
              ->references('idUsuario')
              ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_fisicas');
    }
}
