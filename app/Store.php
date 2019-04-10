<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $fillable=['name','user_id','slug','owner_name','description','logo','address','phone_number','banner'];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function products(){

        return $this->hasMany('App\Product');
    }

    public function bankDetails(){

        return $this->hasOne('App\BankingDetail');
    }


   

}
