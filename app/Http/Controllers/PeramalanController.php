<?php

namespace App\Http\Controllers;
use App\Komoditas;
use App\Transaksi;
use App\Bom;
use App\Commodity;
use App\Packaging;
use Illuminate\Http\Request;


class PeramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function test(Request $request)
    {
        $request->merge(['test' => 'kamu']);

        return request('test');
    }


    public function index(Request $request)
    {
        $transaksi=Transaksi::all();
        $komoditases=Komoditas::all();
        $packagings = Packaging::all();

        $induks = collect([ 1 => 'Superindo', 2 => 'Indogrosir', 3 => 'Giant']);

        if (request()->has('komoditas_id')) {


            foreach ($induks as $key => $item) {

                $request->merge(['pusat_id' => $key]);

                $boms[$key]=Bom::where('commodity_id', request('komoditas_id'))->where('central_id', request('pusat_id'))->first()->quantity;

                $mrp = [

                    // \App\Transaksi::dekomposisi(),
                    \App\Transaksi::movingAverage(),
                    \App\Transaksi::SES(),
                    \App\Transaksi::DES(),

                ];

                $collection = collect($mrp);

                $val = $collection->sortBy('error')->first();

                $forecasts[$key] = collect($val['H'])->values()->take(3);
                $kebutuhan[$key] = $forecasts[$key]->sum();
                $method[$key] = $val['method'];
                $selisih[$key] = $val['error'];
                // $forecasts = Transaksi::dekomposisi()['H'];

            }

            for ($i = 0; $i < 3; $i++) { 
                foreach ($induks as $key => $value) {
                    $monthlyKg[$i][$key] = $forecasts[$key][$i]* $boms[$key] ;
                                        // 
                }
            }

            for ($i = 0; $i < 3; $i++) { 
                foreach ($induks as $key => $value) {
                    $monthly[$i][$key] = $forecasts[$key][$i] ;
                                        // * $boms[$key]
                }
            }

            //untuk tabel MRP
            $nama=Commodity::where('id', request('komoditas_id'))->first()->name;
            $leadTime = Commodity::where('id', request('komoditas_id'))->first()->time;

            $lastMonth = Transaksi::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->first()->tanggal;
            $lastMonthNeed = Transaksi::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->first()->tanggal;
            $lastMonthOrder = Transaksi::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->first()->tanggal->startOfMonth()->subDays($leadTime+7);
            $lastMonthOrderKemasan = Transaksi::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->first()->tanggal->startOfMonth()->subDays(14);

        } else {

            $forecasts = null ;
            $lastMonth = null ;

        }
        
        // return [$forecasts,$monthly];
        return view('ramal.index',compact('transaksi','komoditases','packagings', 'forecasts','lastMonth', 'lastMonthNeed', 'leadTime','lastMonthOrder', 'method', 'kebutuhan', 'induks', 'monthly', 'monthlyKg', 'nama', 'lastMonthOrderKemasan','selisih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
