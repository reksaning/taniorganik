<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komoditas;
use App\Transaksi;
use App\Produksi;
class DashboardController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $komoditases = Komoditas::all();

        $pusats = \App\Central::all();



        if (request()->has('komoditas_id')) {
            $year = request('year');
            $months = Transaksi::where('tanggal', 'like', "%$year%")->orderBy('tanggal', 'desc')->get()->sortBy('bulan')->pluck('bulan')->unique()->values();

            $transaksis = Transaksi::where('tanggal', 'like', "%$year%")->where('komoditas_id', request('komoditas_id'))->orderBy('tanggal', 'desc')->get();

            foreach ($pusats as $pusat) {
                foreach ($months as $month) {
                    $data[$pusat->name][$month] = $transaksis->where('pusat_id', $pusat->id)->where('bulan', $month)->sum('jumlah');
                }
            }
            // $dataGrafiks=Transaksi::where('komoditas_id', request('komoditas_id'))->pluck('jumlah');
            // $dataGrafiksProd=Produksi::where('komoditas_id', request('komoditas_id'))->pluck('jumlah');
        } 

        else {
            $dataGrafiks = null ;
            $dataGrafiksProd = null ;
            $komoditases1 = null ;
        }

        $colors = collect(['red', 'blue', 'green', 'yellow']);

        return view('dashboards.home', compact('komoditases', 'data', 'colors'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cusmon()
    {
        return view('dashboards.cusmon');
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
