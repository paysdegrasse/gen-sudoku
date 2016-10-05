<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function(Blueprint $table){
           $table->increments('id');
           $table->timestamps();
           $table->string('titre', 255);
           $table->text('contenu');
           $table->integer('user_id')->unsigned();
           $table->integer('offre_id')->unsigned();
           
//$table->integer('admission_id')->unsigned();
        });
        
        Schema::table('comments', function(Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->foreign('offre_id')->references('id')->on('offre')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admission');
    }
}
