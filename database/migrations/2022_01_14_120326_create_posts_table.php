<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('content'); //contenu
            $table->integer('likes')->nullable(); //nbLikes
            $table->string('image')->nullable(); //url de l'image

            $table->string('user_name');

            //ForeignKey sur l'id de User
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
