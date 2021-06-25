<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\productController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/achat', function () {
    return view('achat');
});

Route::get('/facture', function () {
    return view('facture');
});

Route::post('add',[UsersController::class, 'addUser']);
Route::post('userComplete',[UsersController::class, 'completeUser']);
Route::post('commande',[CommandeController::class, 'addCommande']);
Route::get('/',[productController::class, 'fetchProducts']);
