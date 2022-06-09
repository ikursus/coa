<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoaController;
use App\Http\Controllers\UserController;

Route::get('/', function(){
    return view('welcome');
    // /resources/views/
})->name('home');

// Route::prefix('coa')->group(function () {

//     Route::get('/', function () {

//         $senaraiCoa = [
//             ['id' => 1, 'kod' => '110011', 'keterangan' => 'Asset 1', 'amaun' => 80.00],
//             ['id' => 2, 'kod' => '110022', 'keterangan' => 'Asset 2', 'amaun' => 50.00],
//             ['id' => 3, 'kod' => '110033', 'keterangan' => 'Asset 3', 'amaun' => 110.00],
//             ['id' => 4, 'kod' => '110044', 'keterangan' => 'Asset 4', 'amaun' => 40.00],
//             ['id' => 5, 'kod' => '110055', 'keterangan' => 'Asset 5', 'amaun' => 150.00]
//         ];

//         return view('theme_coa.index', compact('senaraiCoa'));

//     })->name('coa.index');

//     Route::view('/add', 'theme_coa.template-tambah')->name('coa.create');

//     Route::post('/add', function () {
//         return 'Berjaya dihantar!';
//     })->name('coa.post');

//     Route::get('/{id}/edit', function ($id) {
//         $pageTitle = 'Kemaskini';
//         //['id' => $id] = compact('id')
//         // return view('theme_coa/template-edit')->with('id', $id)->with('pageTitle', $pageTitle);
//         // return view('theme_coa/template-edit', ['id' => $id, 'pageTitle' => $pageTitle]);
//         return view('theme_coa/template-edit', compact('id', 'pageTitle'));
//     })->where('id', '[0-9]+')->name('coa.edit');

//     Route::patch('/{id}/edit', function ($id) {
//         return 'Berjaya dikemaskini!';
//     });

// });


Route::group([
    'prefix' => 'maklumat',
    'as' => 'coa.', // name
], function () {

    Route::get('/', [CoaController::class, 'index'])->name('index');
    Route::get('/add', [CoaController::class, 'create'])->name('create');
    Route::post('/add', [CoaController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CoaController::class, 'edit'])->where('id', '[0-9]+')->name('edit');
    Route::patch('/{id}/edit', [CoaController::class, 'update'])->name('update');

});

Route::group([
    'prefix' => 'users',
    'as' => 'users.', // name
], function () {

    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/add', [UserController::class, 'create'])->name('create');
    Route::post('/add', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::patch('/{id}/edit', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');

});

Route::get('login', function () {
    return 'Ini halaman login';
})->name('login');
