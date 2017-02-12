<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('list/produk', 'HomeController@listprodukguest');
Route::get('hubungi/admin', 'HomeController@hubungiadmin');

Route::get('list/anggota', 'InfoinvenController@listanggota');
Route::get('list/anggota/detail/{id}', 'InfoinvenController@listanggotadetail');
Route::get('list/anggota/delete/{id}', 'InfoinvenController@listanggotadelete');
Route::get('list/anggota/edit/{id}', 'InfoinvenController@listanggotaedit');
Route::post('list/anggota/edit/update', 'InfoinvenController@listanggotaupdate');
Route::get('tambah/anggota', 'InfoinvenController@tambahanggota');
Route::post('tambah/anggota/save', 'InfoinvenController@tambahanggotasave');


Route::get('list/produk/masuk', 'InfoinvenController@listprodukmasuk');
Route::get('list/produk/masuk/detail/{id}', 'InfoinvenController@listprodukmasukdetail');
Route::get('list/produk/masuk/delete/{id}', 'InfoinvenController@listprodukmasukdelete');
Route::get('list/produk/masuk/edit/{id}', 'InfoinvenController@listprodukmasukedit');
Route::post('list/produk/masuk/edit/update', 'InfoinvenController@listprodukmasukupdate');
Route::get('tambah/produk/masuk', 'InfoinvenController@tambahprodukmasuk');
Route::post('tambah/produk/masuk/save', 'InfoinvenController@tambahprodukmasuksave');
Route::get('list/produk/masuk/report/{id}','InfoinvenController@reportmasuk');


Route::get('list/produk/keluar', 'InfoinvenController@listprodukkeluar');
Route::get('list/produk/keluar/detail/{id}', 'InfoinvenController@listprodukkeluardetail');

Route::get('list/produk/keluar/edit/{id}', 'InfoinvenController@listprodukkeluaredit');
Route::post('list/produk/keluar/edit/update', 'InfoinvenController@listprodukkeluarupdate');                                                                    
Route::get('tambah/produk/keluar', 'InfoinvenController@tambahprodukkeluar');
Route::post('tambah/produk/keluar/save', 'InfoinvenController@tambahprodukkeluarsave');
Route::post('ajax/produk/keluar','InfoinvenController@ajaxprodukkeluar');



Route::get('list/produk/pinjaman','InfoinvenController@listprodukpinjaman');
Route::get('tambah/produk/pinjaman','InfoinvenController@tambahprodukpinjaman');
Route::post('tambah/produk/pinjaman/save','InfoinvenController@tambahprodukpinjamansave');
Route::get('list/produk/pinjam/detail/{id}', 'InfoinvenController@listprodukdetail');
Route::get('list/produk/pinjam/edit/{id}', 'InfoinvenController@listprodukpinjamedit');
Route::post('list/produk/pinjam/edit/update', 'InfoinvenController@produkpinjamanupdate');
Route::get('list/produk/pinjam/delete/{id}', 'InfoinvenController@listprodukpinjamandelete');



Route::get('profile', 'InfoinvenController@profile');
Route::get('profile/edit/{username}', 'InfoinvenController@profileedit');
Route::post('profile/update', 'InfoinvenController@profileupdate');


Route::get('login','Auth\AuthController@getLogin');
Route::get('logout','Auth\AuthController@getLogout');
Route::post('login','Auth\AuthController@postLogin');