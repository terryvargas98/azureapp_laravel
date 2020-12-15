<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
/* Routes Book */
Route::get('/books',[BookController::class,'ListBook'])->name('ListBook');
Route::view('/register','Book.register');
Route::post('/register',[BookController::class,'PostCreate'])->name('CreatePost');
