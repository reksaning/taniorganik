<?php

namespace App;


class Bom extends Model
{

	public function commodity(){
	return $this->belongsTo('\App\Commodity');
	}

	public function supplier(){
	return $this->belongsTo('\App\Supplier');
	}

	public function packaging(){
	return $this->belongsTo('\App\Packaging');
	}
    
}
