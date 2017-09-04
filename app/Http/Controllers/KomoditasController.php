<?php

namespace App\Http\Controllers;
use App\Komoditas;
use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    public function index()
    {
        
        $komoditas=Komoditas::all();

        return view('komoditas.index',compact('komoditas'));

    }

    public function show($id)
        {
            $komoditas= Post::find($id);
            return view('komoditas.show', compact('komoditas'));
        } 

    public function create()
        {
            return view('komoditas.create');
        } 

    public function store()
        {
            $this->validate(request(), [
                'nama'        =>  'required',
                'waktu'       =>  'required',
                'kapasitas'   =>  'required'
                ]);

            Komoditas::create(request(['nama','waktu','kapasitas']));
            return redirect('/komoditas');
        } 

    public function edit(Komoditas $komoditas)

    {


        return view('komoditas.edit',compact('komoditas'));

    }

    public function update(Komoditas $komoditas, Request $request)

    {
        $this->validate($request, [

            'nama'        =>  'required',
            'waktu'       =>  'required',
            'kapasitas'   =>  'required'

        ]);

        $komoditas->update([
            'nama' => $request->nama,
            'waktu' => $request->waktu,
            'kapasitas' => $request->kapasitas,
        ]);

        return redirect('/komoditas');
    }
    public function destroy(Komoditas $komoditas)
    {
        $komoditas->delete();
        return redirect('/komoditas');
    }

}
