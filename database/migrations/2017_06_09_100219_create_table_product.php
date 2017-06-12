<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('detail');
            $table->tinyInteger('size');
            $table->string('images');
            $table->string('color');
            $table->string('quantity');
            $table->string('parent');
            $table->string('sale', 100);
            $table->string('price');
            // $table->integer('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categorys');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
