<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
        protected $table = 'bencana';
    public $timestamps = false;
    protected $fillable = ['id','nama_bencana','tanggal','jumlah_relawan','deskripsi','lokasi_bencana'];
}
