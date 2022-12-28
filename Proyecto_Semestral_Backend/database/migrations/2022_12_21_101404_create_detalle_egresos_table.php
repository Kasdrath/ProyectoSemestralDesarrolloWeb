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
        Schema::create('detalle_egresos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('egre_medicamento_id')->nullable();
            $table->foreign('egre_medicamento_id')->references('id')->on('medicamentos');

            $table->unsignedBigInteger('egreso_id')->nullable();
            $table->foreign('egreso_id')->references('id')->on('egresos');

            $table->integer('egre_cantidad');

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
        Schema::dropIfExists('detalle_egresos');
    }
};
