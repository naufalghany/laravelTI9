<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForminputController;

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
    return view ('welcome');
});
//routing dirinya sendiri
Route::get('/salam',function(){
    return 'Assalamualaikum';
});
//routing mengarahkan ke view
Route::get('/hallo', function(){
    return view ('hallo');
});
Route::get('/hallo2', function(){
    return view ('hallo.halloworld');
});
