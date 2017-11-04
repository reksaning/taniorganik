<?php

namespace App\Http\Controllers;
use App\Supplier;
use App\Komoditas;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        
        $supplier=Supplier::all();

        return view('suppliers.index',compact('supplier'));

    }

    public function show($id)
        {
            $supplier= Post::find($id);
            return view('suppliers.show', compact('supplier'));
        } 

    public function create()
        {
            return view('suppliers.create');
        } 

    public function store()
        {
            $this->validate(request(), [
                'name'        =>  'required',
                'alamat'       =>  'required'
                ]);

            Supplier::create(request(['name','alamat']));
            return redirect('/supplier');
        } 

    public function edit(Supplier $supplier)

    {


        return view('suppliers.edit',compact('supplier'));

    }

    public function update(Supplier $supplier, Request $request)

    {
        $this->validate($request, [

            'name'        =>  'required',
            'alamat'       =>  'required',

        ]);

        $supplier->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
        ]);

        return redirect('/supplier');
    }
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect('/supplier');
    }

}
