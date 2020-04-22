<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class luutru extends Model
{
    protected $table = 'luutru';

    public function hochieu(){
        return $this->belongsTo('App\hochieu','id_hochieu','id_hochieu');
    }
}
