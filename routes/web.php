<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello/{id}', function ($id) {
    return view('hello', ['id' => $id]);
});


Route::get('/test', [TestController::class, 'index']);
