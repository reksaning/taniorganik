<?php

namespace App;


class Commodity extends Model
{
    

    public function demand(){
		return $this->HasMany('\App\Demand');
	}

	public function supplier(){
		return $this->belongsTo('App\Supplier');
	}

	public function bom(){
		return $this->HasMany('App\Bom');
	}


}
