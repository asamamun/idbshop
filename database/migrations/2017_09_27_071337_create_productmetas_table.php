<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductmetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productmetas', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->integer('attribute_id')->unsigned()->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
			$table->string('namemeta');
			$table->text('value');		
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
        Schema::dropIfExists('productmetas');
    }
}
