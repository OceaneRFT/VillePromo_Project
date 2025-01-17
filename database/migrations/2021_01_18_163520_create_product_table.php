<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unique();
            // $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->integer('SKU');
            $table->string('picture');
            $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('categories')
            // ->onDelete('cascade');
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
