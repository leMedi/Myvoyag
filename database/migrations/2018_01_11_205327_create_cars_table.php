<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['personal', 'work', 'rental']);
            $table->string('titulaire');
            $table->string('VIN')->nullable();
            // $table->dateTime('delivery_place')->nullable(); // place depart
            $table->dateTime('delivery_time')->nullable();
            // $table->dateTime('return_place')->nullable(); // airoport depart
            $table->dateTime('return_time')->nullable();
            $table->enum('transmission', ['petrol', 'diesel']);
            $table->boolean('rental_ready')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
