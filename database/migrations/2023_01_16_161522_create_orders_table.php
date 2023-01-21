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
            $table->id();
            $table->string('order_id')->unique();
            $table->string('payment_id')->nullable();
            $table->foreignId('user_id');
            $table->string('course_id');
            $table->string('course_name');
            $table->float('price');
            $table->string('method')->nullable();
            $table->string('parcel_status')->nullable();
            $table->string('tracking_link')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('result')->nullable();
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
