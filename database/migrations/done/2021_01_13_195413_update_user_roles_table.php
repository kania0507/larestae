<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::table('user_roles', function (Blueprint $table) { 
            $table->unsignedBigInteger('user_id')->index()->nullable()->change(); 

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');

            $table->unsignedBigInteger('role_id')->index()->nullable()->change(); 

            $table->foreign('role_id')->references('id')->on('roles')
            ->onDelete('cascade');
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
