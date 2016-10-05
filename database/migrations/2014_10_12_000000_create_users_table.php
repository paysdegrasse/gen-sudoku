<?php

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
            $table->string('nom', 100);
            $table->string('Prenom', 100);
            $table->string('identifiant', 30)->unique();
            $table->string('email', 60)->unique();
            $table->string('confirm_email', 60)->unique();
            $table->string('password', 100);
            $table->string('confirm_password', 100);
            $table->rememberToken();
            // permet de créer des champs (created_at)
            $table->timestamps();
            // clé etrangère permettant de définir le rôle de l'utilisateur
            $table->integer('role_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
