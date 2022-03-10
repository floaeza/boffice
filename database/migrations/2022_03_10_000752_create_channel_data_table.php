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
        Schema::create('channel_data', function (Blueprint $table) {
            $table->id();
            $table->char('quality',5);
            $table->char('multicast',25);
            $table->char('number',10);
            $table->char('port',5);
            $table->text('link');
            $table->char('program',10);
            $table->char('position',10);
            $table->char('audio',10);
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
        Schema::dropIfExists('channel_data');
    }
};
