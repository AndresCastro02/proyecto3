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
            $table->timestamps();
            $table->enum('payment',['cc', 'paypal','crypto'])->default('cc');
            $table->enum('state', ['active', 'pending', 'refunden', 'cancelled', 'finished'])->default('pending');
            $table->bigInteger('final_price');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');



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
