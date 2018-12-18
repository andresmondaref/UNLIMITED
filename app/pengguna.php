<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
        protected $table = 'users';
    protected $fillable = ['id,nama_depan,nama_belakang,username,email,alamat,telpon,provinsi,kabupaten,kode_pos,password'];

}
