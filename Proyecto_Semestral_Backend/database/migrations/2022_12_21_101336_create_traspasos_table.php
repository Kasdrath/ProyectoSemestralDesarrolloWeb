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
        Schema::create('traspasos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tras_centro_distribucion_id')->nullable();
            $table->foreign('tras_centro_distribucion_id')->references('id')->on('centrodistribucions');

            //$table->unsignedBigInteger('tras_farmacia_id')->nullable();
            //$table->foreign('tras_farmacia_id')->references('id')->on('farmacias');

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
        Schema::dropIfExists('traspasos');
        Schema::table('traspasos', function (Blueprint $table) {
            $table->dropForeign('tras_centro_distribucion_id');
        });
    }
};
