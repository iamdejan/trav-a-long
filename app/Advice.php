<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model {
    protected $table = "advices";

    protected $primaryKey = "adviceID";
   	public $incrementing = false;
    protected $keyType = "string";
	public $timestamps = false;
    
}
