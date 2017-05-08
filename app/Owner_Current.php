<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner_Current extends Model
{
    protected $table = "owner_current";

    protected $fillable = ['first_name', 'last_name', 'phone', 'cell_phone','email', 'availability', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function properties()
    {
    	return $this->hasMany('App\property','owner_current_id');
    }

    public function scopeSearch($query, $phone)
    {
        return $query->where('phone', 'LIKE', "%$phone%")->orWhere('cell_phone', 'LIKE',"%$phone%");
    }


}
