<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relawanaktivitas extends Model
{
    protected $table = 'relawan_aktivitas';
    protected $fillable = ['id,aktivitas_id,user_id'];
    public $timestamps = false;

          public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function aktivitas(){
    	return $this->belongsTo('App\Aktivitas');
    }
}
