<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $fillable = [
    	'name',
    	'status',
    	'to',
    	'from',
    	'item_id',
    	'dispatcher_id',
    	'reciever_id',
    ];

    public function item(){

    	return $this->belongsTo('App\Models\Item', 'item_id');
    
    }

    public function dispatcher(){

    	return $this->belongsTo('App\Models\User', 'dispatcher_id');
    
    }

    public function reciever(){

    	return $this->belongsTo('App\Models\User', 'reciever_id');
    
    }

    public function location_to(){

    	return $this->belongsTo('App\Models\Location', 'to');
    
    }

    public function location_from(){

    	return $this->belongsTo('App\Models\Location', 'from');
    
    }
}
