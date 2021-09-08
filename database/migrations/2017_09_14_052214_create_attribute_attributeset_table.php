<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeAttributesetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_attributeset', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('attributeset_id')->unsigned()->nullable();
            $table->foreign('attributeset_id')->references('id')->on('attributesets')->onDelete('cascade');
			$table->integer('attribute_id')->unsigned()->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
			$table->boolean('filterable')->default(0);
			$table->boolean('searchable')->default(0);
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
        Schema::dropIfExists('attribute_attributeset');
    }
}
