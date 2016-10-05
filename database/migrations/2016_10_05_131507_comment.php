<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    /**
     * Run the migrations. Commentaire pour les offres
     *
     * @return void
     */
    public function up()
    {
	Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('content');
            $table->boolean('seen')->default(false);
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
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
        Schema::table('offre', function(Blueprint $table) {
            $table->dropForeign('comments_users_id_foreign');
            $table->dropForeign('comments_offre_id_foreign');
        });
        
        Schema::drop('comments');
    }
}
