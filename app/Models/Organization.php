<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    protected $fillable = [
    	'name',
    	'display_name',
    	'description'
    ];

    public function locations(){

    	return $this->hasMany('App\Models\Location');
    
    }
}
