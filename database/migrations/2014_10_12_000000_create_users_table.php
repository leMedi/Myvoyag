<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->date('date_naissance')->nullable();
            $table->string('tel')->nullable();
            $table->string('avatar')->default('default.jpg');
            
            $table->string('email')->unique();
            $table->string('password');
            
            $table->string('passport')->nullable();
            $table->unsignedTinyInteger('passport_expMonth')->nullable();
            $table->unsignedSmallInteger('passport_expYear')->nullable();
            
            $table->string('cin')->unique()->nullable();
            $table->unsignedTinyInteger('cin_valideMonth')->nullable();
            $table->unsignedSmallInteger('cin_valideYear')->nullable();
            
            $table->enum('type', ['salarier', 'responsable', 'gestionnaire', 'directeur','admin']);
            $table->string('departement')->nullable();
            $table->string('code_imputation')->nullable();
            $table->string('code_etablissement')->nullable();
            $table->integer('site_id')->unsigned()->nullable();
            $table->integer('responsable')->unsigned()->nullable();

            $table->enum('car_transmission', ['automatic', 'manuel'])->nullable();
            $table->enum('car_carburant', ['gazoil', 'escence'])->nullable();
            $table->boolean('est_goldClient')->default(false);
            
            $table->enum('flight_seat', ['hublot', 'couloir'])->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('site_id')->references('id')->on('sites');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
