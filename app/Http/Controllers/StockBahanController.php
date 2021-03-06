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

        $stockbahans=stockbahan::all();
        return view('stockbahan.index',compact('stockbahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $bahans=Bahan::all();
        $stockbahan=stockbahan::all();
        return view('stockbahan.create',compact('bahans','stockbahan'));  
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
                'bahan_id'       =>  'required',
                'tanggal'        =>  'required',
                'jumlah'   =>  'required'
                ]);

            stockbahan::create(request(['bahan_id','tanggal','jumlah']));
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

            'bahan_id'       =>  'required',
            'tanggal'        =>  'required',
            'jumlah'   =>  'required'

        ]);

        $stockbahan->update([
            'bahan_id' => $request->bahan_id,
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