<?php

namespace App;



class StockBahan extends Model
{
	public function bahan()

	{

	return $this->BelongsTo('\App\Bahan');
	
	}
    
}
