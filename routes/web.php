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
Route::get('/bencana','bencanaController@index');
Route::get('/aktivitas','aktivitasController@index');

Auth::routes();


Route::get('/home','RelawanLoginController@halamanUtama')->name('halamanRelawan');
Route::get('/homeBnpb ','bnpbLoginController@halamanUtama')->name('halamanBnpb');

Route::get('/relawanAktivitas','aktivitasController@relawanAktivitas');
Route::post('/relawanAktivitas','aktivitasController@daftaraktivitas')->name('daftaraktivitas');
Route::get('/relawanBencana','bencanaController@relawanBencana');
Route::post('/relawanBencana','bencanaController@daftarbencana')->name('daftarbencana');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formAktivitas', function () {
    return view('formAktivitas');
});

Route::get('/daftarrelawan', function () {
    return view('register');
});
Route::get('/loginRelawan','RelawanController@halamanLogin')->name('halamanLoginRelawan');
Route::post('/loginRelawan','RelawanLoginController@login')->name('loginRelawan');

Route::get('/loginBnpb','bnpbLoginController@halamanLogin')->name('halamanLoginBnpb');
Route::post('/loginBnpb','bnpbLoginController@login')->name('loginBnpb');
Route::get('/bnpb', function () {
    return view('bnpb');
});
Route::get('/relawan', function () {
    return view('relawan');
});
Route::get('/formBencana', function () {
    return view('formBencana');
});


route::post('/daftarrelawan', 'penggunaController@register')->name('pengguna.register');

Route::get('/editBencana/{id}', 'bencanaController@edit')->name('bencana.edit');
Route::patch('/editBencana/{bencana}','bencanaController@update')->name('bencana.update');

Route::get('/editAktivitas/{id}', 'aktivitasController@edit')->name('aktivitas.edit');
Route::patch('/editAktivitas/{aktivitas}','aktivitasController@update')->name('aktivitas.update');


Route::post('/formBencana','bencanaController@store')->name('bencana.store');
Route::post('/aktivitas','aktivitasController@store')->name('aktivitas.store');

Route::get('aktivitas/{id}','aktivitasController@show');
Route::get('bencana/{id}','bencanaController@show');

Route::delete('/aktivitas/{id}/delete', 'aktivitasController@destroy')->name('aktivitas.destroy');
Route::delete('/bencana/{id}/delete', 'bencanaController@destroy')->name('bencana.destroy');