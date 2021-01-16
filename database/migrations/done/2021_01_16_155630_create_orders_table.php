<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('customer_id');
            $table->integer('seller_id');
            $table->decimal('total_price')->default(0);
            $table->decimal('total_recieved')->default(0);
            $table->decimal('change')->default(0);
            $table->string('payment_type')->default(""); // cash or credit
            $table->string('sale_status')->default("unpaid"); // paid and unpaid
            $table->date('order_dateTime');
            $table->date('required_dateTime');
            $table->string('desc')->default(""); 
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
        Schema::dropIfExists('orders');
    }
}
