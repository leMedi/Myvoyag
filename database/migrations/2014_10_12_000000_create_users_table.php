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
            $table->date('date_naissance');
            $table->string('tel');
            $table->string('avatar')->default('default.jpg');
            
            $table->string('email')->unique();
            $table->string('password');
            
            $table->string('passport');
            $table->unsignedTinyInteger('passport_expMonth');
            $table->unsignedSmallInteger('passport_expYear');
            
            $table->string('cin')->unique();
            $table->unsignedTinyInteger('cin_valideMonth');
            $table->unsignedSmallInteger('cin_valideYear');
            
            $table->enum('type', ['salarier', 'responsable', 'gestionnaire', 'directeur','admin']);
            $table->string('departement');
            $table->string('code_imputation');
            $table->string('code_etablissement');
            $table->integer('site_id')->unsigned();
            $table->integer('responsable')->unsigned();

            $table->enum('car_transmission', ['automatic', 'manuel']);
            $table->enum('car_carburant', ['gazoil', 'escence']);
            $table->boolean('est_goldClient')->default(false);
            
            $table->enum('flight_seat', ['hublot', 'couloir']);

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
