<?php

namespace App\Http\Controllers;
use App\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function index()
    {
        
        $petani=Petani::all();

        return view('petani.index',compact('petani'));

    }

    public function show($id)
        {
            $petani= Post::find($id);
            return view('petani.show', compact('petani'));
        } 

    public function create()
        {
            return view('petani.create');
        } 

    public function store()
        {
            $this->validate(request(), [
                'nama'        =>  'required',
                'alamat'       =>  'required',
                'luas'   =>  'required'
                ]);

            petani::create(request(['nama','alamat','luas']));
            return redirect('/petani');
        } 

    public function edit(petani $petani)

    {


        return view('petani.edit',compact('petani'));

    }

    public function update(petani $petani, Request $request)

    {
        $this->validate($request, [

            'nama'      =>  'required',
            'alamat'    =>  'required',
            'luas'      =>  'required'

        ]);

        $petani->update([
            'nama'      => $request->nama,
            'alamat'    => $request->alamat,
            'luas'      => $request->luas,
        ]);

        return redirect('/petani');
    }
    public function destroy(petani $petani)
    {
        $petani->delete();
        return redirect('/petani');
    }

}
