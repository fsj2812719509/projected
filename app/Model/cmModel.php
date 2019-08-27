<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cmModel extends Model
{
    protected $primarykey = 'cm_id';
    protected $table = "cm_association";
    public $timestamps=false;
}
