<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {
    protected $table = "activities";

    protected $primaryKey = "activityID";
    public $incrementing = false;
    protected $keyType = "string";
}