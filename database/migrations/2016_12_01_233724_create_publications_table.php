<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('publication_file')->nullable();
            $table->string('type');//select box
           // $table->string('authors');
            $table->string('title');
            $table->string('specialisation');
            $table->string('description')->nullable();
            $table->string('journal');
            $table->string('published_on');


            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
/*
            $table->foreign('author_id')
            ->references('id')
            ->on('authors')
            ->onDelete('no action');*/

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
        Schema::dropIfExists('publications');
    }
}
