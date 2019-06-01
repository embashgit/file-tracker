<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
    	'name',
    	'description',
    	'organization_id'
    ];

    
    public function organization(){

    	return $this->belongsTo('App\Models\Organization', 'organization_id');
    }

    public function items(){

    	return $this->hasMany('App\Models\Item');
    
    }

    public function histories_to(){

    	return $this->hasMany('App\Models\History', 'to');
    
    }

    public function histories_from(){

        return $this->hasMany('App\Models\History', 'from');
    
    }
}
