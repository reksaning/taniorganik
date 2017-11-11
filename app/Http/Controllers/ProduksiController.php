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
        $komoditases=Komoditas::all();
        // $produksi=Produksi::all();
        $suppliers=Supplier::all();
        foreach (Produksi::where('tanggal', request('tanggal'))->get() as $result) {
            $produksi[$result->komoditas_id][$result->supplier_id] = $result->jumlah;
        }
        // return $produksi;
        return view('produksi.index', compact('komoditases', 'produksi','suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produksi=Produksi::where('tanggal', request('tanggal'))->where('supplier_id', request('supplier_id'))->get() ;

    
        if (empty($produksi->first())) {
            $komoditases=Komoditas::all();
            return view('produksi.create', compact(['produksi', 'komoditases']));
        }
         
        return view('produksi.edit', compact('produksi', 'komoditases' ));

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
            return redirect("/produksi?tanggal=$request->tanggal");    
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

 public function update(Request $request)

    {

        $n = 0;
        foreach ($request->produksi_id as $id) {
            Produksi::find($id)->update([
                'jumlah' => $request->jumlah[$n],
            ]);
            $n++;
        }


        return redirect('/produksi');
    }

    public function destroy(Produksi $produksi)
    {
        $produksi->delete();
        return redirect('/produksi');
    }

}