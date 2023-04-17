<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/comics', [ComicController::class, 'index']);
Route::get('/comics/create', [ComicController::class, 'create']);
Route::post('/comics', [ComicController::class, 'store']);
Route::get('/comics/{id}', [ComicController::class, 'show']);
Route::get('/comics/{id}/edit', [ComicController::class, 'edit']);
Route::put('/comics/{id}', [ComicController::class, 'update']);
