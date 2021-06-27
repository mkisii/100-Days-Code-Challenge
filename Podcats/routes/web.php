<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/{id}', [App\Http\Controllers\UsersController::class, 'show']);
Route::get('/users/{id}/podcasts', [App\Http\Controllers\PodcastsController::class, 'index']);

Route::get('/users/{id}/podcasts/create', [App\Http\Controllers\PodcastsController::class, 'create']);
Route::post('/users/{id}', [App\Http\Controllers\PodcastsController::class, 'store'])->name('prodcats.store');
Route::get('/users/{id}/podcasts/{pod_id}', [App\Http\Controllers\PodcastsController::class, 'show']);


  