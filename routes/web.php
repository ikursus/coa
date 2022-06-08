<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
    // /resources/views/
});


Route::get('/coa', function () {

    $senaraiCoa = [
        ['id' => 1, 'kod' => '110011', 'keterangan' => 'Asset 1', 'amaun' => 80.00],
        ['id' => 2, 'kod' => '110022', 'keterangan' => 'Asset 2', 'amaun' => 50.00],
        ['id' => 3, 'kod' => '110033', 'keterangan' => 'Asset 3', 'amaun' => 110.00],
        ['id' => 4, 'kod' => '110044', 'keterangan' => 'Asset 4', 'amaun' => 40.00],
        ['id' => 5, 'kod' => '110055', 'keterangan' => 'Asset 5', 'amaun' => 150.00]
    ];

    return view('theme_coa.index', compact('senaraiCoa'));


});


Route::view('/coa/tambah', 'theme_coa.template-tambah');
Route::post('/coa/tambah', function () {
    return 'Berjaya dihantar!';
});

Route::get('/coa/{id}/edit', function ($id) {
    $pageTitle = 'Kemaskini';
    //['id' => $id] = compact('id')
    // return view('theme_coa/template-edit')->with('id', $id)->with('pageTitle', $pageTitle);
    // return view('theme_coa/template-edit', ['id' => $id, 'pageTitle' => $pageTitle]);
    return view('theme_coa/template-edit', compact('id', 'pageTitle'));
});

Route::patch('/coa/{id}/edit', function ($id) {
    // kemaskini database
    // ..


    return 'Berjaya dikemaskini!';
});
