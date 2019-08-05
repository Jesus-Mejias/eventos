<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('registers');
        Schema::defaultStringLength(191);
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rating', 45);
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('events_id')->unsigned(); 
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
