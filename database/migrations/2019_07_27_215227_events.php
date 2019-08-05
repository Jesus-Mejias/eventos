<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('events');
        Schema::defaultStringLength(191);
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 45);
            $table->string('description', 45);
            $table->date('date');
            $table->string('time', 45);
            $table->string('duration', 45);
            $table->string('lcation', 45);
            $table->decimal('price', 6, 2);
            $table->string('capacity', 45);
            $table->bigInteger('id_user');
            $table->bigInteger('id_event');
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
        //
    }
}
