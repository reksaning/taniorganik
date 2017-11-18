<?php

namespace App\Http\Controllers;
use App\Packaging;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stocks = Stock::all();
        return view('stocks.index',compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $packagings = Packaging::all();
        $stocks = Stock::all();
        return view('stocks.create',compact('packagings','stocks'));  
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
                'packaging_id'       =>  'required',
                'date'        =>  'required',
                'quantity'   =>  'required'
                ]);

            Stock::create(request(['packaging_id','date','quantity']));
            return redirect('/stock');    }

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

    public function edit(Stock $stock)

    {
        return view('stocks.edit',compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function update(Stock $stock, Request $request)

    {

        $this->validate($request, [

            'packaging_id'       =>  'required',
            'date'        =>  'required',
            'quantity'   =>  'required'

        ]);

        $stock->update([
            'packaging_id' => $request->packaging_id,
            'date' => $request->date,
            'quantity' => $request->quantity,
        ]);

        return redirect('/stock');
    }
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect('/stock');
    }

}