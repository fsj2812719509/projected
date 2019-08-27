<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NavModel extends Model
{
    protected $primarykey = 'n_id';
    protected $table = "navigation";
    public $timestamps=false;
}
