<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relawanbencana extends Model
{
    protected $table = 'relawan_bencana';
        protected $fillable = ['id,bencana_id,user_id'];
        public $timestamps = false;

          public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function bencana(){
    	return $this->belongsTo('App\bencana');
    }
}
