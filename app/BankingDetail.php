<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankingDetail extends Model
{
    protected $fillable=['store_id','bank_name','account_number','branch_code'];

    
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
