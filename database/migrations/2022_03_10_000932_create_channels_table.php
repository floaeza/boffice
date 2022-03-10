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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->char('name', 20);
            $table->char('abbreviation',20);
            $table->text('description');
            $table->unsignedBigInteger('station_id');
            $table->foreign('station_id')->references('id')->on('stations');
            $table->unsignedBigInteger('channel_data_id');
            $table->foreign('channel_data_id')->references('id')->on('channel_data');
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
        Schema::dropIfExists('channels');
    }
};
