<?php

namespace App\Http\Controllers;
use App\Supplier;
use App\Commodity;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        
        $suppliers=Supplier::all();

        return view('suppliers.index',compact('suppliers'));

    }


    public function create()
        {
            return view('suppliers.create');
        } 

    public function store()
        {
            $this->validate(request(), [
                'name'        =>  'required',
                'initial'        =>  'required',
                'address'       =>  'required'
                ]);

            Supplier::create(request(['name','initial','address']));
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
            'initial'       =>'required',
            'address'       =>  'required'

        ]);

        $supplier->update([
            'name' => $request->name,
            'initial' => $request->initial,
            'address' => $request->address,
        ]);

        return redirect('/supplier');
    }
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect('/supplier');
    }

}
