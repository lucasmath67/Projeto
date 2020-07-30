<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['status'];


    public function client(){

        return $this->belongsTo(Client::class);
    }
    public function products(){

        return $this->belongsToMany(Product::class);
    }
}
