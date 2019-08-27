<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nc extends Model
{
    protected $primarykey = 'NC_ID';
    protected $table = "nc_association";
    public $timestamps=false;
}
