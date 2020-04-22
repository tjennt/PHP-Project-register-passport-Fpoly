<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhatky extends Model
{
    protected $table = 'nhatky';

    public function admin(){
        return $this->belongsTo('App\admin','id_admin','id');
    }
    public function hochieu(){
        return $this->belongsTo('App\hochieu','id_hochieu','id_hochieu');
    }
}
