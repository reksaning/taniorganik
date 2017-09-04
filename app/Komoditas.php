<?php

namespace App;



class Komoditas extends Model
{


	public function transaksi()

	{

	return $this->HasMany('\App\Transaksi');
	
	}
   

}
 