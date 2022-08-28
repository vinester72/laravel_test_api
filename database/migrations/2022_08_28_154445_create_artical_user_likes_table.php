<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticalUserLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artical_user_likes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('user_id');
            //idx
            $table->index('article_id', 'pul_article_idx');
            $table->index('user_id', 'pul_user_idx');

            //fk
            $table->foreign('article_id', 'pul_article_fk')->on('articles')->references('id');
            $table->foreign('user_id', 'pul_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('artical_user_likes');
    }
}
