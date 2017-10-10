<?php

namespace App;



class Komoditas extends Model
{


	public function transaksi()

	{

	return $this->HasMany('\App\Transaksi');
	
	}


	public function produksi()

   	{

	return $this->HasMany('\App\Produksi');
	
	}
   

   	public function lahan()

   	{

	return $this->HasMany('\App\Lahan');
	
	}
	

}
 