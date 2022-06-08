<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
    // /resources/views/
});


Route::view('/coa', 'theme_coa.index');
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
