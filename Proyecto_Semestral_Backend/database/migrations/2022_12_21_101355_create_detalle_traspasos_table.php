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
        Schema::create('detalletraspasos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tras_medicamento_id')->nullable();
            $table->foreign('tras_medicamento_id')->references('id')->on('medicamentos');

            $table->unsignedBigInteger('traspaso_id')->nullable();
            $table->foreign('traspaso_id')->references('id')->on('traspasos');

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
        Schema::dropIfExists('detalletraspasos');
        Schema::table('detalletraspasos', function (Blueprint $table) {
            $table->dropForeign('tras_medicamento_id');
            $table->dropForeign('traspaso_id');
        });
    }
};
