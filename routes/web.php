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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/uartist', function () {
    return view('uartist', [
        'title' => 'Artist Page'
    ]);
})->middleware(['checkRole:uartist']);
Route::get('/ufan', function () {
    return view('ufan', [
        'title' => 'Fan Page'
    ]);
})->middleware(['checkRole:ufan']);
