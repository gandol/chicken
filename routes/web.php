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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::any('/loginPage','loginController@login');
Route::get('/','homeController@index');
Route::get('/cart','homeController@cartBatang');
Route::get('/keluar','homeController@logout');
Route::get('/verif/{name}','homeController@verif');


Route::get('/jumlahpengguna','jumlahpenggunaController@index');
Route::get('/tambahjumlahpengguna','jumlahpenggunaController@tambah');
Route::get('/editjumlahpengguna/{id}','jumlahpenggunaController@edit');
Route::post('/aksitambahjumlahpengguna','jumlahpenggunaController@aksitambah');
Route::post('/aksieditjumlahpengguna/{id}','jumlahpenggunaController@aksiedit');
Route::get('/hapusjumlahpengguna/{id}','jumlahpenggunaController@hapus');

Route::get('/produk','produkController@index');
Route::get('/tambahproduk','produkController@tambah');
Route::get('/editproduk/{id}','produkController@edit');
Route::post('/aksitambahproduk','produkController@aksitambah');
Route::post('/aksieditproduk/{id}','produkController@aksiedit');
Route::get('/hapusproduk/{id}','produkController@hapus');

Route::get('/transaksi','transaksiController@index');
Route::get('/edittransaksi/{id}','transaksiController@edit');
Route::post('/aksiedittransaksi/{id}','transaksiController@aksiedit');

Route::get('/berita','beritaController@index');
Route::get('/tambahberita','beritaController@tambah');
Route::get('/editberita/{id}','beritaController@edit');
Route::post('/aksitambahberita','beritaController@aksitambah');
Route::post('/aksieditberita/{id}','beritaController@aksiedit');
Route::get('/hapusberita/{id}','beritaController@hapus');