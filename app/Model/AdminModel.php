<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $primarykey = 'a_id';
    protected $table = "admin";
    public $timestamps=false;
}
