<?php

namespace App\Http\Controllers;
use App\Komoditas;
use App\Transaksi;
use Illuminate\Http\Request;

class MRPController extends Controller
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

        if (request()->has('komoditas_id')) {
            $forecasts = Transaksi::dekomposisi()['H'];
            $lastMonth = Transaksi::where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->first()->tanggal;
        } else {
            $forecasts = null ;
            $lastMonth = null ;

        }


        // return $forecasts;
        return view('MRP.index',compact('transaksi','komoditases', 'forecasts','lastMonth'));
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

