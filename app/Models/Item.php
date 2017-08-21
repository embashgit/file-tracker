<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
    	'name',
    	'location_id'
    ];

    public function location(){

    	$this->belongsTo('App\Models\Location', 'location_id');
    }

    public function histories(){

    	$this->hasMany('App\Models\History');
    
    }
}
