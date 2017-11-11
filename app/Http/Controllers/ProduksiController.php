<?php

namespace App\Http\Controllers;
use App\Komoditas;
use App\Produksi;
use App\Supplier;
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
        $suppliers=Supplier::all();
        return view('produksi.index', compact('komoditas', 'produksi','suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $komoditases=Komoditas::all();
        $suppliers=Supplier::all();
        
        return view('produksi.create', compact('komoditases','suppliers'));
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
                'supplier_id'   =>  'required',
                'tanggal'        =>  'required',
                'jumlah'   =>  'required'
                ]);

        // return $request->all();
        $n=0;
        foreach ($request->jumlah as $jumlah) {
            $produksi = Produksi::create([
                'komoditas_id' => $request->komoditas_id[$n],
                'supplier_id' => $request->supplier_id,
                'tanggal' => $request->tanggal,
                'jumlah' => $jumlah,
            ]);
            $n++;
        }
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
         $komoditases=Komoditas::all();

        return view('produksi.edit',compact('produksi','komoditases'));
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