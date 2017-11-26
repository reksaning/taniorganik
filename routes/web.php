<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//halaman utama
Route::get('/', function () {
    return redirect('/dashboard');
});

//Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


//iki commodity
Route::get('/commodity', 'CommodityController@index')->name('commodity');
Route::get('/commodity/create', 'CommodityController@create');
Route::post('/commodity','CommodityController@store');
Route::get('/commodity/edit/{commodity}','CommodityController@edit');
Route::put('/commodity/{commodity}','CommodityController@update');
Route::delete('/commodity/{commodity}','CommodityController@destroy');

Route::get('/demand', 'DemandController@index')->name('demand');
Route::get('/demand/create', 'DemandController@create');
Route::post('/demand','DemandController@store');
Route::get('/demand/edit/{demand}','DemandController@edit');
Route::put('/demand','DemandController@update');
Route::delete('/demand/{demand}','DemandController@destroy');


// iki transaksi
Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/create', 'TransaksiController@create');
Route::post('/transaksi','TransaksiController@store');
Route::get('/transaksi/edit/{transaksi}','TransaksiController@edit');
Route::put('/transaksi/{transaksi}','TransaksiController@update');
Route::delete('/transaksi/{transaksi}','TransaksiController@destroy');

// iki bom
Route::get('/bom', 'BomController@index')->name('bom');
Route::get('/bom/create', 'BomController@create');
Route::post('/bom','BomController@store');
Route::get('/bom/edit/{bom}','BomController@edit');
Route::put('/bom','BomController@update');
Route::delete('/bom/{bom}','BomController@destroy');

// packaging baku
Route::get('/packaging', 'PackagingController@index')->name('packaging');
Route::get('/packaging/create', 'PackagingController@create');
Route::post('/packaging','PackagingController@store');
Route::get('/packaging/edit/{packaging}','PackagingController@edit');
Route::put('/packaging/{packaging}','PackagingController@update');
Route::delete('/packaging/{packaging}','PackagingController@destroy');

// stock packaging baku
Route::get('/stock', 'StockController@index')->name('packaging');
Route::get('/stock/create', 'StockController@create');
Route::post('/stock','StockController@store');
Route::get('/stock/edit/{stock}','StockController@edit');
Route::put('/stock/{stock}','StockController@update');
Route::delete('/stock/{stock}','StockController@destroy');

//data petani
Route::get('/petani', 'PetaniController@index')->name('petani');
Route::get('/petani/create', 'PetaniController@create');
Route::post('/petani','PetaniController@store');
Route::get('/petani/edit/{petani}','PetaniController@edit');
Route::put('/petani/{petani}','PetaniController@update');
Route::delete('/petani/{petani}','PetaniController@destroy');

//data lahan
Route::get('/lahan', 'LahanController@index')->name('lahan');
Route::get('/lahan/create', 'LahanController@create');
Route::post('/lahan','LahanController@store');
Route::get('/lahan/edit/{lahan}','LahanController@edit');
Route::put('/lahan/{lahan}','LahanController@update');
Route::delete('/lahan/{lahan}','LahanController@destroy');

//data lahan
Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/supplier/create', 'SupplierController@create');
Route::post('/supplier','SupplierController@store');
Route::get('/supplier/edit/{supplier}','SupplierController@edit');
Route::put('/supplier/{supplier}','SupplierController@update');
Route::delete('/supplier/{supplier}','SupplierController@destroy');


//data peramalan
Route::get('/peramalan', 'PeramalanController@index')->name('peramalan');
Route::post('/peramalan','PeramalanController@index');
Route::get('/MRP', 'MRPController@index')->name('supplier');
Route::get('/peramalan/test', 'PeramalanController@test');

Route::get('/test', function()
{
	// $transaksis = \App\Transaksi::dekomposisi();
	$transaksis = \App\Transaksi::dekomposisi();
	return $transaksis;
});

Route::get('/MA', function()
{
	// $transaksis = \App\Transaksi::dekomposisi();
	return \App\Transaksi::movingAverage();
});

Route::get('/SES', function()
{
	// $transaksis = \App\Transaksi::dekomposisi();
	return \App\Transaksi::SES();
});

Route::get('/DES', function()
{
	// $transaksis = \App\Transaksi::dekomposisi();
	return \App\Transaksi::DES();
});

Route::get('/mrp', function()
{

	$mrp = [
		\App\Transaksi::dekomposisi(),
		\App\Transaksi::movingAverage(),
		\App\Transaksi::SES(),
		\App\Transaksi::DES(),

	];

	$collection = collect($mrp);

	$val = $collection->sortBy('error')->first();
	return $val;

	
});



Route::get('/test2', function()
{
	$transaksis[0] = \App\Transaksi::all()->sortBy('commodity_id');
	$transaksis[1] = \App\Transaksi::all()->sortBy('commodity_id')->values()->all();

	return $transaksis;
});


