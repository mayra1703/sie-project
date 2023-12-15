<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table){

            $table->id();
            $table->float('calificacion_total');
            $table->integer('calificacionU1')->default(0);
            $table->integer('calificacionU2')->default(0);
            $table->integer('calificacionU3')->default(0);
            $table->integer('calificacionU4')->default(0);
            $table->integer('calificacionU5')->default(0);
            $table->integer('calificacionU6')->default(0);

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
        Schema::dropIfExists('calificaciones');
    }
};
