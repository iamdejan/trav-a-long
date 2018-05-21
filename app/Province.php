<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {
    protected $table = "provinces";

	protected $primaryKey = "provinceID";
    public $incrementing = false;
    protected $keyType = "string";
	public $timestamps = false;
	
	public function cities() {
		return $this->hasMany('App\City', 'provinceID', 'provinceID');
	}
}
