<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomas', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->enum('diploma_type', ['Бакалавр', 'Магистратура', 'Аспирантира', 'other']);
            $table->string('other_diploma')->nullable();
            $table->string('seria_number')->unique();
            $table->string('thesis_topic')->nullable();
            $table->string('specialization');
            $table->string('department')->nullable();
            $table->string('university');
            $table->string('year');
            $table->string('diploma_link')->nullable();

             $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('diplomas');
    }
}
