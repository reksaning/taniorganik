<?php

namespace App;


class Supplier extends Model
{
    public function komoditas()

   	{

	return $this->hasManyThrough('App\Komoditas', 'App\Transaksi');
	
	}

}
