<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     protected $fillable=['name','email','telephone','address'];

     public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders()
    {

        return $this->hasMany(Order::class);
    }
}
