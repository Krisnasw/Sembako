<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderTemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders_temp', function (Blueprint $table) {
            $table->increments('id_orders_temp');
            $table->string('id_produk');
            $table->string('nama_user');
            $table->string('jumlah');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('stok');
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
        Schema::drop('orders_temp');
    }
}
