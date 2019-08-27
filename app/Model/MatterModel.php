<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatterModel extends Model
{
    protected $primarykey = 'm_id';
    protected $table = "matter";
    public $timestamps=false;
}
