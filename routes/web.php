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

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'home']);

use App\Http\Controllers\ContactusController;
Route::get('/contactUs', [ContactusController::class, 'contactus']);

use App\Http\Controllers\AboutusController;
Route::get('/aboutUs', [AboutusController::class, 'aboutus']);
// use App\Http\Controllers\PostsController;
// Route::get('/aboutUs', [PostsController::class, 'posts']);






