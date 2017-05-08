<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Property extends Model
{
    protected $table = "type_property";

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
