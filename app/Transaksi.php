<?php

namespace App;


class Transaksi extends Model
{
    
   	public function komoditas()

	{

		return $this->BelongsTo('\App\Komoditas');

	}

	public function getBulanAttribute()
	{
		return $this->tanggal->format('Y-m');
	}

	public static function dekomposisi()

	{

		$x = Transaksi::all()->pluck('bulan')->unique()->count();
		$val['x'] = 0;
		$val['x2'] = 0;


		for ($i=1; $i < $x+1; $i++) { 
			$val['x'] += $i;
			$val['x2'] += pow($i, 2);
		}

		$val['y'] = Transaksi::all()->sum('jumlah');


		$n = 1;
		$val['xy'] = 0;
		foreach (Transaksi::orderBy('tanggal')->get()->pluck('bulan')->unique() as $bulan) {
			
			$val['sumy'][$bulan] = Transaksi::where('tanggal', 'like', "%$bulan%")->sum('jumlah');
			$val['xy'] += $n*$val['sumy'][$bulan];
			$n++;

		}

		$val['a']=($val['xy']*$val['x']-$val['y']*$val['x2'])/(pow($val['x'], 2)-$val['x2']*$x);
		$val['b']=($val['y']-$val['a']*$x)/$val['x'];
		
		//rumus hasil peramalan Trend Linear

		$m=$x+1;
		$val['x3'] = 0;
		for ($i=$m; $i < $m+3; $i++) { 
			$val['x3'] = $val['a']+$val['b']*$i;
			
		}


		return $val;




		// $val['b']=((($val['xy']-$val['b']*$val['x2'])/$val['x'])*n)/$val['y'];
		
		// $val['a']=($val['xy']-$val['b']*$val['x2'])/$val['x'];
		// $ramal= $val[a]+$val['b']*X

	}


	protected $dates = ['tanggal'];
	protected $appends = ['bulan'];
}

 

