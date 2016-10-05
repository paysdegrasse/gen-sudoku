<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Offre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->string('titre', 255);
            // slug : titre formaté pour être inclus dans les urls
            $table->string('slug', 255)->unique();
            // Sommaire : de l'annonce
            $table->text('summary');
            // Contenu de 
            $table->text('contenu');
            // publier : permet de savoir si l'annonce a été publié 
            $table->boolean('publier');
	    $table->boolean('validation_admin')->default(false);
            // users_id : clé étrangère pour connaître l’auteur de l’article
	    $table->integer('users_id')->unsigned();
	});
	
        Schema::table('offre', function(Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offre', function(Blueprint $table){
            $table->dropForeign('offre_users_id_foreign');
        });
        Schema::drop('offre');
    }
}
