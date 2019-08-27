<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CloumnModeL extends Model
{
    protected $primarykey = 'c_id';
    protected $table = "cloumn";
    public $timestamps=false;
}
