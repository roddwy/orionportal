<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

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
