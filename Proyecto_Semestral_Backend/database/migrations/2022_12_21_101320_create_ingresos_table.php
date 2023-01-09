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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ingreso');
            $table->unsignedBigInteger('ingre_centro_distribucion_id')->nullable();
            $table->foreign('ingre_centro_distribucion_id')->references('id')->on('centro_distribucions');

            // $table->unsignedBigInteger('ingre_farmacia_id')->nullable();
            // $table->foreign('ingre_farmacia_id')->references('id')->on('farmacias');

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
        Schema::dropIfExists('ingresos');
        Schema::table('ingresos', function (Blueprint $table) {
            $table->dropForeign('ingre_centro_distribucion_id');
        });
    }
};
