<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleMapController;
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
Route::prefix('google-map')->group(function () {
    Route::get('/',[GoogleMapController::class ,'index'])->name('google.map.index');
    Route::post('/post',[GoogleMapController::class,'store'])->name('google.map.store');

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('info');
});

Route::get('user', )->name('user');

Auth::routes();




