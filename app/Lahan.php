<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    
    public function petani()

	{

	return $this->belongsTo(Petani::class);

	}


    public function komoditas()

	{

	return $this->belongsTo(Komoditas::class);

	}

}
