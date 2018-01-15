<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->text('subjet')->nullable();
            
            
            $table->enum('step', [1, 2, 3])->default(1);

            // step 1
            $table->date('departure_date')->nullable();
            $table->time('departure_time')->nullable();

            $table->date('return_date')->nullable();
            $table->time('return_time')->nullable();

            // step 2
            // $table->integer('departure_site');
            // $table->integer('destination_site');
            $table->integer('departure_site_id')->unsigned()->nullable();
            $table->integer('destination_site_id')->unsigned()->nullable();

            $table->string('fight_departure_start_airport')->nullable();
            $table->string('fight_departure_end_airport')->nullable();

            $table->date('fight_departure_start_date')->nullable();
            $table->time('fight_departure_start_time')->nullable();
            $table->date('fight_departure_end_date')->nullable();
            $table->time('fight_departure_end_time')->nullable();
            $table->string('fight_departure_durration')->nullable();
            
            $table->string('fight_return_start_airport')->nullable();
            $table->string('fight_return_end_airport')->nullable();
            $table->date('fight_return_start_date')->nullable();
            $table->time('fight_return_start_time')->nullable();
            $table->date('fight_return_end_date')->nullable();
            $table->time('fight_return_end_time')->nullable();
            $table->string('fight_return_duartion')->nullable();
            
            $table->integer('flight_price')->unsigned()->nullable();
            $table->string('flight_currency')->nullable();

            $table->text('flight_json')->nullable();
            
            
            // step 3
            
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
        Schema::dropIfExists('demandes');
    }
}
