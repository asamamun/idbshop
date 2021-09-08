<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('branch');
            $table->string('email');
            $table->string('fb_pageid');
            $table->string('contact_person');
            $table->string('coverimage');
            $table->string('profileimage');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('shops');
    }
}
