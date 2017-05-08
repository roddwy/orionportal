<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use App\Zone;

class property extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'admission_date',
        'save_to'   => 'slug'
    ];

    protected $table = "properties";

    protected $fillable = [
    	'admission_date', 'sale_price', 'offer_price', 'comission', 'financing', 'building', 
    	'piso', 'no_dpto', 'referencies', 'antiquily', 'legal_document', 'avaluo', 'delivery_time',
    	'additional_inf', 'bedrooms', 'kitchens', 'bathrooms', 'livingrooms', 'garages', 'asensors',
    	'suite', 'pantry', 'deskrooms', 'servicesrooms', 'storages', 'others', 'surface_area',
    	'surface_builder', 'street','maps', 'zone_id', 'category_id', 'type_property_id', 'owner_current_id', 
    	'user_id', 'state_id'
    ];


    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function zone()
    {
    	return $this->belongsTo('App\Zone');
    }

    public function type_property()
    {
    	return $this->belongsTo('App\Type_Property');
    }

    public function owner_current()
    {
    	return $this->belongsTo('App\Owner_Current', 'owner_current_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function images()
    {
    	return $this->hasMany('App\image');
    }


    public function scopeSearch($query, $id)
    {
        return $query->where('id', 'LIKE', "%$id%");
    }

    public function scopeSearch2($query, $precio)
    {
        return $query->where('sale_price', 'LIKE',  "%$precio%");
    }

    public function scopeSearch3($query, $zona)
    {
        return $query->where('zone_id', 'LIKE',  "%$zona%");
    }
         
    public function scopeSearch4($query, $category)
    {
        return $query->where('category_id', 'LIKE',  "%$category%");
    }

    public function scopeSearch5($query, $type)
    {
        return $query->where('type_property_id', 'LIKE',  "%$type%");
    } 
}
