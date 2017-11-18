<?php

namespace App;


class Demand extends Model
{
	
    public function commodity(){
    	return $this->belongsTo('App\Commodity');
    }

	public function supplier(){
		return $this->belongsTo('App\Supplier');
	}

}
