<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "foods";
    protected $fillable =['foodname','foodimage','foodingredient', 'foodprice', 'menu_id', 'user_id'];

    public function menu(){
        return $this->belongsTo('App\Model\Menu');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
