<?php

namespace App;


class Bahan extends Model

{
    public function stockbahan()

	{

	return $this->HasMany('\App\StockBahan');
	
	}

}
