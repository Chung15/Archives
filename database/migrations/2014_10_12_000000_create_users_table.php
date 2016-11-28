<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronymic');
            $table->integer('INN');
            $table->string('title');// change to enum all selected box
            $table->string('grade');
           // $table->date('dateOfBirth');
            $table->string('gender');
            $table->enum('maritalStatus',['single', 'married', 'divorced','widow']);
           // $table->binary('picture');//path/link images in the DB
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('terms');

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
        Schema::drop('users');
    }
}