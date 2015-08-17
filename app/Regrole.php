<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regrole extends Model
{
    protected $fillable = [
        'role'
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }
}
