<?php

namespace App\Http\Controllers;
use App\Bahan;
use App\StockBahan;
use Illuminate\Http\Request;

class StockBahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stockbahan=stockbahan::all();
        return view('stockbahan.index',compact('stockbahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $stockbahan=stockbahan::all();
        
        return view('stockbahan.create',compact('stockbahan'));  
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
                'bahans_id'       =>  'required',
                'tanggal'        =>  'required',
                'jumlah'   =>  'required'
                ]);

            stockbahan::create(request(['bahans_id','tanggal','jumlah']));
            return redirect('/stockbahan');    }

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

    public function edit(stockbahan $stockbahan)

    {
        return view('stockbahan.edit',compact('stockbahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function update(stockbahan $stockbahan, Request $request)

    {

        $this->validate($request, [

            'bahans_id'       =>  'required',
            'tanggal'        =>  'required',
            'jumlah'   =>  'required'

        ]);

        $stockbahan->update([
            'bahans_id' => $request->komoditas_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/stockbahan');
    }
    public function destroy(stockbahan $stockbahan)
    {
        $stockbahan->delete();
        return redirect('/stockbahan');
    }

}