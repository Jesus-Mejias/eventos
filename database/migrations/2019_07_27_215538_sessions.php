<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sessions');
        Schema::defaultStringLength(191);
        Schema::create('sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 45);
            $table->string('room', 45);
            $table->string('speaker', 100);
            $table->bigInteger('events_id')->unsigned();
            $table->timestamps();

            $table->foreign('events_id')->references('id')->on('events')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
