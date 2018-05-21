<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
    protected $table = "cities";

    protected $primaryKey = "cityID";
    public $incrementing = false;
    protected $keyType = "string";
	public $timestamps = false;
	
	public function province() {
		return $this->belongsTo('App\Province', 'provinceID', 'provinceID');
	}
}
