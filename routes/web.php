<?php

use Illuminate\Support\Facades\Route;
use App\Models\Animals;
use App\Http\Controllers\AnimalsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
    ]);
});
// Route::get('/animals', 'App\Http\Controllers\AnimalController@index')->name('animals.index');

Route::get('animals', 'AnimalController@index');


