<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class congdan extends Model
{
    protected $table = 'congdan';

    public function hochieu(){
        return $this->hasOne('App\comment','id_hochieu','id_hochieu');
    }
}
