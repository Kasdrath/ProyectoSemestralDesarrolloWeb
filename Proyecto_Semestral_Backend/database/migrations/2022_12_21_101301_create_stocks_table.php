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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('scd_medicamento_id')->nullable();
            $table->foreign('scd_medicamento_id')->references('id')->on('medicamentos');

            $table->unsignedBigInteger('scd_centro_distribucion_id')->nullable();
            $table->foreign('scd_centro_distribucion_id')->references('id')->on('centro_distribucions');

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
        Schema::dropIfExists('stocks');
    }
};
