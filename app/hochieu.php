<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hochieu extends Model
{
    protected $table = 'hochieu';

    public function nhatky(){
        return $this->hasMany('App\nhatky','id_nhatky','id_nhatky');
    }
    public function user(){
        return $this->belongsTo('App\User','id_admin','id');
    }
    public function congdan(){
        return $this->belongsTo('App\congdan','id_congdan','id_congdan');
    }
    public function luutru(){
        return $this->hasOne('App\luutru','id_hochieu','id_hochieu');
    }
}
