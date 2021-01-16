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
        Schema::table('orders', function (Blueprint $table) { 
            $table->unsignedBigInteger('name_unreg')->nullable();
            $table->unsignedBigInteger('email_unreg')->nullable();
            $table->unsignedBigInteger('phone_unreg')->nullable();
            $table->unsignedBigInteger('address_unreg')->nullable();   
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
