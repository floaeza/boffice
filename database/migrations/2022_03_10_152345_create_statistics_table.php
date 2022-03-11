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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->char('type',40);
            $table->double('time', 8,2)->comment('Tiempo de visualización en segundos');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->unsignedBigInteger('channel_id');
            $table->foreign('channel_id')->references('id')->on('channels');
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices');
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
        Schema::dropIfExists('statistics');
    }
};
