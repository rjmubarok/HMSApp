<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('currency')->default('BDT');
            $table->integer('amount')->default(0);
            $table->string('dob')->nullable();
            $table->integer('order_id')->nullable();
            $table->string('customer_name')->default('Abdullah');
            $table->string('customer_phone')->default('0147');
            $table->string('email')->default('abdullah@gmail.com');
            $table->string('customer_address')->default('ABdullahpur');
            $table->string('customer_city')->default('ABdullahpur');
            $table->string('customer_postcode')->default('ABdullahpur');
            $table->string('discsount_amount')->default('0');
            $table->string('disc_percent')->default('0');
            $table->string('client_ip')->nullable();
            $table->string('customer_state')->default('BD');
            $table->string('value1')->default('BD');
            $table->unsignedBigInteger('floor_id')->default(1);
            $table->unsignedBigInteger('room_id')->default(1);
            $table->boolean('status')->default(1);
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
};
