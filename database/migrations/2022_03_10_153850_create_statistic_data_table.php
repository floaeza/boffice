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
        Schema::create('statistic_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->unsignedBigInteger('channel_id');
            $table->foreign('channel_id')->references('id')->on('channels');
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices');
            $table->unsignedBigInteger('statistic_id');
            $table->foreign('statistic_id')->references('id')->on('statistics');
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
        Schema::dropIfExists('statistic_data');
    }
};
