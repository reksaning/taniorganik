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

	public static function getMonth($month = 36)
	{
		return static::orderBy('tanggal', 'desc')->get()->take($month)->sortBy('bulan')->pluck('bulan')->unique()->values();
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
		foreach (Transaksi::getMonth() as $bulan) {
			
			$val['sumy'][$bulan] = Transaksi::where('tanggal', 'like', "%$bulan%")->sum('jumlah');
			$val['xy'] += $n*$val['sumy'][$bulan];
			$n++;

		}

		$val['a']=($val['xy']*$val['x']-$val['y']*$val['x2'])/(pow($val['x'], 2)-$val['x2']*$x);
		$val['b']=($val['y']-$val['a']*$x)/$val['x'];
		
		//rumus hasil peramalan Trend Linear

		
		// $val['x3'] = 0;
		for ($i=1; $i <= $x; $i++) { 
			$Y[$i] = $val['a']+$val['b']*$i;
			
		}

		$val['Y'] = $Y;

		$a=1;
		foreach ($val['sumy'] as $sumy) {
			$koef[$a]=$sumy/$Y[$a];
			$a++;
		}
		$val['koef']=$koef;

		if (request()->has('periode')) {
			$periode=request('periode');
			for ($i=$x+1; $i <= $x+$periode; $i++) { 
				$H[$i] = $val['a']+$val['b']*$i;
				
			}
			$val['H'] = $H;
		}




		return [
			'val' => $val, 
			];




		// $val['b']=((($val['xy']-$val['b']*$val['x2'])/$val['x'])*n)/$val['y'];
		
		// $val['a']=($val['xy']-$val['b']*$val['x2'])/$val['x'];
		// $ramal= $val[a]+$val['b']*X

	}


	protected $dates = ['tanggal'];
	protected $appends = ['bulan'];
}

 

