<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestigadoresController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});
/*Route::get('/investigador', function () {
    return view('investigador.index');
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();





//Route::resource('investigador', InvestigadoresController::class);

Route::get('/investigador', [App\Http\Controllers\InvestigadoresController::class, 'index']);
Route::get('investigador/create', [App\Http\Controllers\InvestigadoresController::class, 'create'])->name('investigador.create');
Route::post('investigador/store', [App\Http\Controllers\InvestigadoresController::class, 'store'])->name('investigador.store');
