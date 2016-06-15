<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('slug');
            $table->string('satuan');
            $table->string('kat');
            $table->string('qty');
            $table->string('tipe_a');
            $table->string('tipe_b');
            $table->string('tipe_c');
            $table->string('gambar');
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
        Schema::drop('kategori');
    }
}
