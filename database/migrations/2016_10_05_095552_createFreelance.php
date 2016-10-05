<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelance', function(Blueprint $table)
        {
			$table->increments('id');
                        $table->string('nom', 80);
                        $table->string('prenom', 60);
                        $table->string('adresse', 255);
                        $table->integer('code_postal');
			$table->string('email', 60);
                        $table->string('email_confirmation', 60);
                        $table->boolean('acceptation_societe');
                        $table->boolean('admin')->default(false);
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
        Schema::drop('freelance');
    }
}
