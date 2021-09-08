<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //Billing Address
            $table->string('b_first_name');
            $table->string('b_last_name');
            $table->string('b_company_name');
            $table->string('b_email');
            $table->string('b_phone');
            $table->string('b_country');
            $table->string('b_address1');
            $table->string('b_address2');
            $table->string('b_city');
            $table->string('b_district');
            $table->string('b_zip');
            //Shipping Address
            $table->string('s_first_name');
            $table->string('s_last_name');
            $table->string('s_company_name');
            $table->string('s_email');
            $table->string('s_phone');
            $table->string('s_country');
            $table->string('s_address1');
            $table->string('s_address2');
            $table->string('s_city');
            $table->string('s_district');
            $table->string('s_zip');
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
        Schema::dropIfExists('user_details');
    }
}
