<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    protected $table = "user_messages";
    protected $fillable = ['username', 'useremail', 'usermessage'];
}
