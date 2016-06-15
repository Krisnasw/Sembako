<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_orders');
            $table->string('id_kustomer');
            $table->string('kode_orders');
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('alamat');
            $table->string('telp');
            $table->string('jumlah_dibayar');
            $table->string('status');
            $table->string('sayur');
            $table->string('qty_sayur');
            $table->string('buah');
            $table->string('qty_buah');
            $table->string('plastik');
            $table->string('qty_plastik');
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
        //
        Schema::drop('orders');
    }
}
