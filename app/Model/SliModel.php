<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SliModel extends Model
{

    protected $primarykey = 's_id';
    protected $table = "slideshow";
    public $timestamps=false;
}
