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

Route::get('/', ['App\Http\Controllers\FrontendController', 'homepage'])->name('homepage');
Route::get('/servicii', ['App\Http\Controllers\FrontendController', 'services'])->name('services');
Route::get('/echipa', ['App\Http\Controllers\FrontendController', 'team'])->name('team');
Route::get('/galerie', ['App\Http\Controllers\FrontendController', 'gallery'])->name('gallery');
Route::get('/contact', ['App\Http\Controllers\FrontendController', 'contact'])->name('contact');
Route::get('/evaluare', ['App\Http\Controllers\FrontendController', 'call'])->name('call');
Route::get('/cookie', ['App\Http\Controllers\FrontendController', 'cookie'])->name('cookie');
Route::get('/termeni-si-conditii', ['App\Http\Controllers\FrontendController', 'terms'])->name('terms');
Route::post('/contact', ['App\Http\Controllers\FrontendController', 'send_contact'])->name('send_contact');
Route::post('/evaluare', ['App\Http\Controllers\FrontendController', 'send_evaluation'])->name('send_evaluation');

