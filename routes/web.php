<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MypostController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/app', [App\Http\Controllers\PostItemController::class, 'index'])->name('app');

Route::POST('/app', [App\Http\Controllers\PostItemController::class, 'store'])->name('app');


Route::get('/my_item', [App\Http\Controllers\MypostController::class, 'getitem'])->name('my_item');

//Route::post('my_item', [App\Http\Controllers\MypostController::class,'destroy'])->name('my_item');

Route::get('delete/{id}',[App\Http\Controllers\MypostController::class,'destroy']);


Route::get('edit/{id}',[App\Http\Controllers\MypostController::class,'edit']);

Route::PUT('update-data/{id}', [App\Http\Controllers\MypostController::class,'update']);


Route::get('claim_item/{id}',[App\Http\Controllers\ClaimitemController::class,'edit']);

Route::PUT('update-data-claimitem/{id}', [App\Http\Controllers\ClaimitemController::class,'update']);

// Route::PUT('update-data', [App\Http\Controllers\ClaimitemController::class,'store']);

Route::get('/response', [App\Http\Controllers\ResController::class, 'my_response'])->name('response');
?>
