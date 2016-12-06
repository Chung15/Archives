<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

         Schema::create('publication_author', function(Blueprint $table) {

            $table->integer('publication_id')->unsigned()->index();
            $table->foreign('publication_id')->references('id')->on('publcations')->onDelete('cascade');

            $table->integer('author_id')->unsigned()->index();
             $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
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
        Schema::dropIfExists('authors');
        Schema::dropIfExists('publication_author');
    }
}
