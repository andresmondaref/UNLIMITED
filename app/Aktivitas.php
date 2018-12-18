<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $table = 'aktivitas';
    public $timestamps = false;
    protected $fillable = ['id','nama_kegiatan','jenis_kegiatan','tanggal','deskripsi_kegiatan','lokasi_kegiatan'];

}
