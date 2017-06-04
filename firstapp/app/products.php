<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable  = array(
    	'name' ,
    	'price'
    	 );
  public $timestamps = false;
}
