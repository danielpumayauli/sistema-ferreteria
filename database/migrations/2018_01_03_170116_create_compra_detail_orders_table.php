<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_detail_orders', function (Blueprint $table) {
            $table->increments('id');

            // FK header (ORDER_COMPRA)
            $table->integer('compra_order_id')->unsigned();
            $table->foreign('compra_order_id')->references('id')->on('compra_orders');

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
        Schema::dropIfExists('compra_detail_orders');
    }
}
