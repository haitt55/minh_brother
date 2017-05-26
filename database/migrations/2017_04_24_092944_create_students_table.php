<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();;
            //payment address
            $table->string('payment_first_name', 50)->nullable();
            $table->string('payment_last_name', 50)->nullable();;
            $table->string('payment_company_name', 50)->nullable();
            $table->string('payment_country', 50)->nullable();
            $table->string('payment_address', 100)->nullable();
            $table->string('payment_city', 50)->nullable();
            $table->string('payment_post_code', 50)->nullable();
            $table->string('payment_phone_number', 50)->nullable();
            $table->string('payment_email', 180)->nullable();
            //recieve address
            $table->string('recieve_first_name', 50)->nullable();
            $table->string('recieve_last_name', 50)->nullable();
            $table->string('recieve_company_name', 50)->nullable();
            $table->string('recieve_country', 50)->nullable();
            $table->string('recieve_address', 100)->nullable();
            $table->string('recieve_city', 50)->nullable();
            $table->string('recieve_post_code', 50)->nullable();
            
            $table->tinyInteger('del_flg')->nullable();
            $table->rememberToken();
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
        Schema::drop('students');
    }
}
