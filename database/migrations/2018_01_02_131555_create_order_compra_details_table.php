<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderCompraDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_compra_details', function (Blueprint $table) {
            $table->increments('id');

            // FK header (ORDER_COMPRA)
            $table->integer('order_compra_id')->unsigned();
            $table->foreign('order_compra_id')->references('id')->on('order_compras');

            // FK (PRODUCT)
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('quantity');
            $table->integer('discount')->default(0); // %int

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
        Schema::dropIfExists('order_compra_details');
    }
}
