<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable=['name','slug','main_image','store_id','category','description','image','price'];
  

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function images() {
      
       	return $this->hasMany('App\Image');
       }

 


}
