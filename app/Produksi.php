<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    
    public function komoditas()

	{

	return $this->belongsTo(Komoditas::class);

	}
}
