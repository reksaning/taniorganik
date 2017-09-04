<?php

namespace App;


class Transaksi extends Model
{
    
   	public function komoditas()

	{

	return $this->BelongsTo('\App\Komoditas');

	}

}

 

