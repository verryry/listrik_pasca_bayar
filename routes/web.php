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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware('users')->group(function(){
  Route::get('admin/dashboard', 'HomeController@index')->name('home');
  Route::resource('admin/user','Backend\UsersController');
  Route::resource('admin/tarif','Backend\TarifController');

  Route::resource('admin/pelanggan','Backend\PelangganController');
  Route::get('admin/pelanggan/report','Backend\PelangganController@report')->name('reportPelanggan');

  Route::resource('admin/penggunaan','Backend\PenggunaanController');
  Route::get('admin/penggunaan/report','Backend\PenggunaanController@report')->name('reportPenggunaan');

  Route::resource('admin/tagihan','Backend\TagihanController');
  Route::get('admin/tagihan/report','Backend\TagihanController@report')->name('reportTagihan');

  Route::get('admin/pembayaran/create/{id}','Backend\PembayaranController@create')->name('pembayaran');
  Route::get('admin/pembayaran/','Backend\PembayaranController@index')->name('index');
  Route::post('admin/pembayaran/store','Backend\PembayaranController@store')->name('save');
  Route::get('admin/pembayaran/destroy/{id}','Backend\PembayaranController@destroy')->name('destroy');
  Route::get('admin/pembayaran/report','Backend\PembayaranController@report')->name('reportPembayaran');

});

Route::group(['prefix' => 'search'] , function(){
	Route::get('pelanggan' , 'UsersController@search');
});
