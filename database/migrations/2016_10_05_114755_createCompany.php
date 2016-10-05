<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societe', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom_gerant', 80);
            $table->string('prenom_gerant', 60);
            $table->string('nom_societe', 100);
            $table->string('adresse', 255);
            $table->integer('code_postal');
            $table->integer('siret');
	    $table->string('email', 60);
            $table->string('email_confirmation', 60);
            $table->boolean('valider_societe');
	    $table->string('password', 60);
            $table->string('identifiant')->unique();
            //$table->boolean('admin')->default(false);
            $table->
            $table->rememberToken();
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
        Schema::drop('societe');
    }
}
