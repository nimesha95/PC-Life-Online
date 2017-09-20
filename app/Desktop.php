<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
    protected $fillable = ['proid','name','brand','type','description','image','price'];
}
