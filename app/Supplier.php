<?php

namespace App;


class Supplier extends Model
{

    public function commodity(){
		return $this->hasManyThrough('App\Commodity', 'App\Demand');
	}

	public function bom(){
		return $this->hasMany('App\Bom');
	}

}
