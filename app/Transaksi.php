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
		return static::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->get()->take($month)->sortBy('bulan')->pluck('bulan')->unique()->values();
	}

	public static function dekomposisi()

	{
		// nilai x = jumlah bulan
		$x = Transaksi::where('komoditas_id', request('komoditas_id'))->get()->pluck('bulan')->unique()->count();
		$val['x'] = 0;
		$val['x2'] = 0;

		//nilai variabel x1+x2+x3 & x1kuadrat
		for ($i=1; $i < $x+1; $i++) { 
			$val['x'] += $i;
			$val['x2'] += pow($i, 2);
		}

		// jumlah total transaksi
		$val['y'] = Transaksi::where('komoditas_id', request('komoditas_id'))->get()->sum('jumlah');

		// nilai perbulan dikali
		$n = 1;
		$val['xy'] = 0;
		foreach (Transaksi::getMonth() as $bulan) {
			
			$val['sumy'][$n] = Transaksi::where('tanggal', 'like', "%$bulan%")->where('komoditas_id', request('komoditas_id'))->sum('jumlah');
			$val['xy'] += $n*$val['sumy'][$n];
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
			$a = 1;
			for ($i=$x+1; $i <= $x+$periode; $i++) { 
				$H[$i] = number_format(($val['a']+$val['b']*$i)*$koef[$a], 0);
				$a++;
			}
			$val['H'] = $H;
		}
	
		// return array_values($val['H']);
		
		return $val;




		// $val['b']=((($val['xy']-$val['b']*$val['x2'])/$val['x'])*n)/$val['y'];
		
		// $val['a']=($val['xy']-$val['b']*$val['x2'])/$val['x'];
		// $ramal= $val[a]+$val['b']*X
	}

	public static function movingAverage()
	{
		$val = Transaksi::dekomposisi();
		$sumy = $val['sumy'];
		
		for ($n=4; $n <= count($sumy);) { 
			$MA[$n] = ($sumy[$n-3]+$sumy[$n-2]+$sumy[$n-1])/3;
			$n++;
		}

		return $MA;
		
	}


	public static function SES()
	{

		$val = Transaksi::dekomposisi();
		$sumy = $val['sumy'];

		$alpas=[0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9];
		$n=1;
		// $SE[1]=$sumy[1];

		
		foreach ($alpas as $alpa) {
			for ($i=2; $i <= count($sumy);) { 
				$sumi[$i]=$sumy;


       		// $SES[$i]=$SE[$i-1]+$alpa*($sumy[$i-1]*$SE[$i-1]);
       		$i++;




			// $u[$n]=$alpa;	
			// $n++;
		}

		// return $u;
		return $sumy;

	}

}

		


	public static function DES()
	{
		$alpas=[0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9];

		return $alpas;
		}


		// foreach ($alpas as $alpa) {
		// 	foreach (Transaksi::getMonth() as $bulan) {
		// 	$val['H'][$alpa] = $val['sumy'][$bulan]*$alpa;
		// 	}
		// }

		// return ($val['H']);
			
		

		
	

	protected $dates = ['tanggal'];
	protected $appends = ['bulan'];
}

 

