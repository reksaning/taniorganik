<?php

namespace App;



class Stock extends Model
{
    public function packaging(){
	return $this->BelongsTo('\App\Packaging');
	}

}
