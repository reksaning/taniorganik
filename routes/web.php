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
    return view('welcome');
});

//Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//iki komoditas
Route::get('/komoditas', 'KomoditasController@index')->name('komoditas');
Route::get('/komoditas/create', 'KomoditasController@create');
Route::post('/komoditas','KomoditasController@store');
Route::get('/komoditas/edit/{komoditas}','KomoditasController@edit');
Route::put('/komoditas/{komoditas}','KomoditasController@update');
Route::delete('/komoditas/{komoditas}','KomoditasController@destroy');


// iki transaksi
Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/create', 'TransaksiController@create');
Route::post('/transaksi','TransaksiController@store');
Route::get('/transaksi/edit/{transaksi}','TransaksiController@edit');
Route::put('/transaksi/{transaksi}','TransaksiController@update');
Route::delete('/transaksi/{transaksi}','TransaksiController@destroy');

// iki produksi
Route::get('/produksi', 'ProduksiController@index')->name('produksi');
Route::get('/produksi/create', 'ProduksiController@create');
Route::post('/produksi','ProduksiController@store');
Route::get('/produksi/edit/{produksi}','ProduksiController@edit');
Route::put('/produksi/{produksi}','ProduksiController@update');
Route::delete('/produksi/{produksi}','ProduksiController@destroy');

// bahan baku
Route::get('/bahan', 'BahanController@index')->name('bahan');
Route::get('/bahan/create', 'BahanController@create');
Route::post('/bahan','BahanController@store');
Route::get('/bahan/edit/{bahan}','BahanController@edit');
Route::put('/bahan/{bahan}','BahanController@update');
Route::delete('/bahan/{bahan}','BahanController@destroy');

// stock bahan baku
Route::get('/stockbahan', 'StockBahanController@index')->name('bahan');
Route::get('/stockbahan/create', 'StockBahanController@create');
Route::post('/stockbahan','StockBahanController@store');
Route::get('/stockbahan/edit/{stockbahan}','StockBahanController@edit');
Route::put('/stockbahan/{stockbahan}','StockBahanController@update');
Route::delete('/stockbahan/{stockbahan}','StockBahanController@destroy');

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
Route::get('/peramalan', 'PeramalanController@index')->name('peramalan');
Route::post('/peramalan','PeramalanController@index');


Route::get('/test', function()
{
	$transaksis = \App\Transaksi::dekomposisi();

	return $transaksis;
});

Route::get('/test2', function()
{
	$transaksis[0] = \App\Transaksi::all()->sortBy('komoditas_id');
	$transaksis[1] = \App\Transaksi::all()->sortBy('komoditas_id')->values()->all();

	return $transaksis;
});