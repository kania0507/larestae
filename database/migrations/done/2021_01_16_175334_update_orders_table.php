<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('orders', function (Blueprint $table) { 
            $table->integer('customer_id')->default(0)->change(); 
            $table->integer('seller_id')->default(0)->change(); 
            $table->dateTime('order_dateTime')->current()->change();
            $table->dateTime('required_dateTime')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
