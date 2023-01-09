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
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ingre_medicamento_id')->nullable();
            $table->foreign('ingre_medicamento_id')->references('id')->on('medicamentos');

            $table->unsignedBigInteger('ingreso_id')->nullable();
            $table->foreign('ingreso_id')->references('id')->on('ingresos');

            $table->integer('ingre_cantidad');

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
        Schema::dropIfExists('detalleingresos');
        Schema::table('detalleingresos', function (Blueprint $table) {
            $table->dropForeign('ingre_medicamento_id');
            $table->dropForeign('ingreso_id');
        });
    }
};
