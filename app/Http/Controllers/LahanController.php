<?php

namespace App\Http\Controllers;
use App\Petani;
use App\Lahan;
use App\Komoditas;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petanis=Petani::all();
        $lahan=Lahan::all();
        $komoditases=Komoditas::all();
        return view('lahan.index',compact('petanis', 'lahan','komoditases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petanis=Petani::all();
        $komoditases=Komoditas::all();
        return view('lahan.create',compact('petanis','komoditases'));  
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
                'petani_id'       =>  'required',
                'komoditas_id'        =>  'required',
                'luas'   =>  'required'
                ]);

            Lahan::create(request(['petani_id','komoditas_id','luas']));
            return redirect('/lahan');    }

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

    public function edit(lahan $lahan)

    {
        $petanies=Petani::all();
        return view('lahan.edit',compact('lahan','petanies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function update(lahan $lahan, Request $request)

    {

        $this->validate($request, [

            'petani_id'       =>  'required',
            'komoditas_id'        =>  'required',
            'luas'   =>  'required'

        ]);

        $lahan->update([
            'petani_id' => $request->petani_id,
            'komoditas_id' => $request->komoditas_id,
            'luas' => $request->luas,
        ]);

        return redirect('/lahan');
    }
    public function destroy(lahan $lahan)
    {
        $lahan->delete();
        return redirect('/lahan');
    }

}