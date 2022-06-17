<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();


            /*start relation*/
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
              /*close relation*/
 /*start relation*/
             $table->unsignedBigInteger('product_id');
             $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
      /*close relation*/
      $table->integer('quantity')->nullable();
      $table->decimal('price',16,2)->nullable();
                 

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
        Schema::dropIfExists('order_details');
    }
}
