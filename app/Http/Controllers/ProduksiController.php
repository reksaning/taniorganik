<?php

namespace App\Http\Controllers;
use App\Komoditas;
use App\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komoditas=Komoditas::all();
        $produksi=Produksi::all();
        return view('produksi.index',compact('komoditas', 'produksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $produksi=Produksi::all();

        return view('produksi.create',compact('produksi'));    
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

            Produsksi::create(request(['komoditas_id','tanggal','jumlah']));
            return redirect('/produksi');    
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

    public function edit(Produksi $produksi)

    {
        return view('ProduksiController.edit',compact('produksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function update(Produksi $produksi, Request $request)

    {

        $this->validate($request, [

            'komoditas_id'       =>  'required',
            'tanggal'        =>  'required',
            'jumlah'   =>  'required'

        ]);

        $produksi->update([
            'komoditas_id' => $request->komoditas_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/produksi');
    }
    public function destroy(Produksi $produksi)
    {
        $produksi->delete();
        return redirect('/produksi');
    }

}