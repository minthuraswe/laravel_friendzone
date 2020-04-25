<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";
    protected $fillable =  ['menu_name'];

    public function foods(){
        return $this->hasMany('App\Model\Food');
    }
}
