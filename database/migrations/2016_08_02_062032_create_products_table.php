<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function ($table) {
    $table->increments('id');
    $table->string('braintree_plan');
    $table->string('slug')->unique();
    $table->integer('category_id')->unsigned();
    $table->string('name');
    $table->string('cpu')->nullable();
    $table->integer('ram')->nullable();
    $table->string('disk')->nullable();
    $table->string('line')->nullable();
    $table->float('price');
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
        Schema::drop('products');
    }
}
