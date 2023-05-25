<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CinemasController;


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
    return view('home');
})->name('home');
// movies
Route::group(['prefix'=>'movies', 'as'=>'movies.'], function(){
    Route::get('/', [MoviesController::class, 'index'])->name('index');
    Route::get('/show/{id}=>{name?}', [MoviesController::class, 'show'])->name('show');

});
// cinemas
Route::group(['prefix'=>'cinemas', 'as'=>'cinemas.'], function(){
    Route::get('/', [CinemasController::class, 'index'])->name('index');
    Route::get('/show/{id}=>{name?}', [CinemasController::class, 'show'])->name('show');

});
// contact us
Route::group(['prefix'=>'contact', 'as'=>'contact.'], function(){
    Route::get('/', function (){
        return view('contact');
    })->name('index');
});
