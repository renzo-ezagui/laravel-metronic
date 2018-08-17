<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Schema;

class Codes extends Model
{
    //
    protected $fillable = ['code', 'fme', 'fme_name', 'dorman','dorman_name'];
}
