<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UploadGambarController;


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

//Route::get('/', function () {
 //   return view ('welcome');
//});


Route::get('/', function () {
  return view('index', [
    "title" => "Beranda"
  ]);
});

Route::get('/about', function () {
    return view('about', [
      "title" => "About",
        "nama" => "Shinta Nuriyah",
        "email" => "shintaaa@gmail.com",
        "gambar" => "shinta.jpeg"
    ]);
  });

  Route::get('/gallery', function () {
    return view('gallery', [
      "title" => "Gallery"
    ]);
  });
  

  //Route::resource('/contacts',ContactController::class);
  Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
  Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
  Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
  Route::get('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
  Route::post('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');

  Route::get('/upImage/index', [UploadGambarController::class, 'index'])->name('upImage.index');
  Route::get('/upImage/createGambar', [UploadGambarController::class, 'create'])->name('upImage.createGambar');
  Route::post('/upImage/createGambar', [UploadGambarController::class, 'store'])->name('upImage.createGambar');
  Route::get('/upImage/{id}/edit', [UploadGambarController::class, 'edit'])->name('upImage.edit');
  Route::post('/upImage/{id}/destroy', [UploadGambarController::class, 'destroy'])->name('upImage.destroy');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
