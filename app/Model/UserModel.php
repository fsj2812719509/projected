<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $primarykey = 'u_id';
    protected $table = "user";
    public $timestamps=false;
}
