<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = "kategori";

    protected $fillable = array('nama', 'slug','satuan','kat','qty','tipe_a','tipe_b','tipe_c','gambar');
}
