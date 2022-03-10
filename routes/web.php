<?php

use Illuminate\Support\Facades\Route;

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
    return view('myproject');
});

Route::view('/welcome', 'welcome');

Route::get('rama', function () {
    return 'Hello WFP C';
});

Route::get('catalog', function () {
    return view('myproject');
});

Route::get('catalog/medicines', function () {
    return view('catalog', ['tipe'=>'medicine']);
});

Route::get('catalog/equip', function () {
    return view('catalog', ['tipe'=>'equipment']);
});

Route::get('catalog/medicines/{id}', function ($id) {
    return view('detail', ['id'=>$id]);
});

Route::get('catalog/equipment/{id}', function ($id) {
    return view('detail', ['id'=>$id]);
});


Route::get('wfp/{kelas?}',function ($kelas = "C") {
    //Apabila bukan Kelas C,
    //maka munculkan "bukan kelas saya"
    //apabila kelas C, maka
    //keluarkan WFP kelas saya
    if ($kelas != "C" && $kelas != "c") {
        return "bukan kelas saya";
    }
    else{
        return "WFP kelas saya";
    }
    
});

Route::get('greeting',function(){
    return view('welcome', ['name' => 'Rama']);
});

Route::resource('obat','ProductController');
Route::resource('medicine','MedicineController');
Route::resource('kategori_obat','CategoryController');
