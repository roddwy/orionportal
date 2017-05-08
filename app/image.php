<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table="images";

    protected $fillable=['name', 'property_id'];

    public function property()
    {
    	return $this->belongsTo('App\property');
    }

    public function imageportada($query, $id){
    	return $query->where('id', 'LIMIT', "%$id%");
    }
}
