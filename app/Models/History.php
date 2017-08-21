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
    	'receiver_id',
    ];

    public function item(){

    	$this->belongsTo('App\Models\Item', 'item_id');
    
    }

    public function dispatcher(){

    	$this->belongsTo('App\Models\User', 'dispatcher_id');
    
    }

    public function receiver(){

    	$this->belongsTo('App\Models\User', 'receiver_id');
    
    }

    public function to(){

    	$this->belongsTo('App\Models\Location', 'to');
    
    }

    public function from(){

    	$this->belongsTo('App\Models\Location', 'from');
    
    }
}
