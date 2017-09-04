<?php

namespace App\Http\Controllers;
use App\Komoditas;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komoditas=Komoditas::all();
        $transaksi=Transaksi::all();
        return view('transaksi.index',compact('komoditas', 'transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $transaksi=Transaksi::all();
        
        return view('transaksi.create',compact('transaksi'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
                'komoditas_id'       =>  'required',
                'tanggal'        =>  'required',
                'jumlah'   =>  'required'
                ]);

            Transaksi::create(request(['komoditas_id','tanggal','jumlah']));
            return redirect('/transaksi');    }

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

    public function edit(Transaksi $transaksi)

    {
        return view('transaksi.edit',compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function update(Transaksi $transaksi, Request $request)

    {

        $this->validate($request, [

            'komoditas_id'       =>  'required',
            'tanggal'        =>  'required',
            'jumlah'   =>  'required'

        ]);

        $transaksi->update([
            'komoditas_id' => $request->komoditas_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/transaksi');
    }
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect('/transaksi');
    }

}