<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('tel')->nullable();
            $table->unsignedTinyInteger('rating')->default(0);
            $table->string('country', 30);
            $table->string('city', 30);
            $table->string('address')->nullable();
            $table->unsignedSmallInteger('price')->default(0);
            $table->boolean('with_food')->default(false);
            $table->integer('site_id')->unsigned()->nullable();
            $table->integer('distance')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
