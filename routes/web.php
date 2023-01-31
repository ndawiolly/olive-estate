<?php

use App\Http\Controllers\Pages;
use App\Http\Controllers\PostController;
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


Route::get('/', [Pages::class, 'indexPage'])->name('home');
Route::get('/aboutus', [Pages::class, 'aboutus'])->name('about');
Route::get('/contactus', [Pages::class, 'contactus'])->name('contact');
Route::get('/estate_gallery/{name}',[Pages::class, 'estate_gallery'])->where(["name"=> "[a-zA-Z ]+",
    // "id" => "[0-9]+"
    ])->name('estate_gallery');

Route::get('/admin_index', [PostController::class, 'AdminIndex'])->name('admin_home');
Route::get('/admin_login', [PostController::class, 'AdminLogin'])->name('login');
// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/newproperty',[PostController::class, 'createProp'])->name('new property');
