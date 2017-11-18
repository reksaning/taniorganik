<?php

namespace App;


class Packaging extends Model
{
    public function stock(){
		return $this->HasMany('\App\Stock');
	}

	public function bom(){
		return $this->HasMany('\App\Bom');
	}




	
}
