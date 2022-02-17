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
    return "Medicines";
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
