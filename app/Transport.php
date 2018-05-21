<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model {
    protected $table = "transport_types";

    protected $primaryKey = "typeID";
    public $incrementing = false;
    protected $keyType = "string";
	public $timestamps = false;
    
}
