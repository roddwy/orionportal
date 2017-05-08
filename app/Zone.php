<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = "zones";

    protected $fillable = ['name'];

    public function properties()
    {
    	return $this->hasMany('App\property');
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('name', 'LIKE', "%$name%");
    }
}
