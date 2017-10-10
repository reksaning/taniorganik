<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    public function lahan()

   	{

	return $this->HasMany('\App\Lahan');
	
	}

}
