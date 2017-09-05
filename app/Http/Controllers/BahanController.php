<?php

namespace App\Http\Controllers;
use App\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan=Bahan::all();
        return view('bahan.index',compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $bahan=Bahan::all();
        
        return view('bahan.create',compact('bahan'));  
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
                'nama'       =>  'required',
                'harga'        =>  'required'
                ]);

            Bahan::create(request(['nama','harga']));
            return redirect('/bahan');    }

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

    public function edit(Bahan $bahan)

    {
        return view('bahan.edit',compact('bahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function update(Bahan $bahan, Request $request)

    {

        $this->validate($request, [

            'nama'       =>  'required',
            'harga'        =>  'required'

        ]);

        $bahan->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            
        ]);

        return redirect('/bahan');
    }
    public function destroy(Bahan $bahan)
    {
        $bahan->delete();
        return redirect('/bahan');
    }

}