<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    protected $fillable = ['country', 'state', 'city', 'area', 'street', 'door', 'landmark_1', 'landmark_2', 'phone', 'gender', 'currency', 'tax_code', 'tax_rate'];


    public function user()
    {
        return $this->hasOne('App\User');
    }


}


