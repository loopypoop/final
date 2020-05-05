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
            $table->bigIncrements('order_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('item_count');
            $table->unsignedInteger('total_price');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->text('email');
            $table->string('country');
            $table->string('city');
            $table->string('zip');
            $table->string('credit');
            $table->string('exp');
            $table->string('cvv');

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
