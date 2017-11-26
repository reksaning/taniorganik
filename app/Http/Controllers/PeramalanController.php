<?php

namespace App\Http\Controllers;
use App\Komoditas;
use App\Transaksi;
use App\Bom;
use Illuminate\Http\Request;

class PeramalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi=Transaksi::all();
        $komoditases=Komoditas::all();
        $boms=Bom::find(request('pusat_id'));
        if (request()->has('komoditas_id')) {
            $mrp = [
                \App\Transaksi::dekomposisi(),
                \App\Transaksi::movingAverage(),
                \App\Transaksi::SES(),
                \App\Transaksi::DES(),

            ];

            $collection = collect($mrp);

            $val = $collection->sortBy('error')->first();

            $forecasts = $val['H'];
            $kebutuhan = array_sum($forecasts);
            $method = $val['method'];
            // $forecasts = Transaksi::dekomposisi()['H'];
            $lastMonth = Transaksi::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->first()->tanggal;
        } else {
            $forecasts = null ;
            $lastMonth = null ;

        }


        // return $forecasts;
        return view('ramal.index',compact('transaksi','komoditases', 'forecasts','lastMonth', 'method', 'kebutuhan'));
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
