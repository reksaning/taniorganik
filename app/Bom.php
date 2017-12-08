<?php

namespace App;


class Bom extends Model
{

	public function komoditas(){
		return $this->belongsTo('\App\Komoditas');
	}

	public function commodity(){
		return $this->belongsTo('\App\Commodity');
	}

	public function supplier(){
		return $this->belongsTo('\App\Supplier');
	}

	public function packaging(){
		return $this->belongsTo('\App\Packaging');
	}

	public function central(){
		return $this->belongsTo('App\Central');
	}
    
}
