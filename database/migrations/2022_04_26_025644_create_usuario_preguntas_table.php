<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_preguntas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('pregunta_id');
            $table->unsignedBigInteger('usuario_id');

            $table->timestamps();
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->foreign('usuario_id')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_preguntas');
    }
}
