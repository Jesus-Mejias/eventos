<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ratings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ratings');
        Schema::defaultStringLength(191);
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rating', 45);
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
