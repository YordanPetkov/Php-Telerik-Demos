<?php

namespace CoolBlog\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {
    protected $table = 'country';
    public $timestamps = false;
    /* 
    protected $primatyKey;
    public $incrementing; */

    public function getCountryNameAttribute($value) {
        return 'Country name : ' . $value;
    }
}
