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



Route::get('/test', function () {
    return "RUTA 1 TEST";
});

Route::get('/hola/{nombre?}', function ($nombre='Danilo') {
    return "Hola $nombre conocenos: <a href= '".route ("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros', function () {
    return "<h1>Toda la informacion sobre nosotros</h1>";
})->name("nosotros"); // nombre de la ruta se dene usar .route("name")


Route::get('home', function () {
    return view('home');
})->name("home");


Route::resource('dashboard/post', 'dashboard\PostController');
Route::resource('dashboard/order', 'dashboard\OrderController');
Route::resource('dashboard/item', 'dashboard\ItemController');
Route::resource('dashboard/user', 'dashboard\UserController');
Route::resource('dashboard/order_detail', 'dashboard\Order_detailController');
Route::resource('dashboard/control', 'dashboard\ControlController');
//Route::resource('admin/post', PostController::class);

Route::get('/','web\webcontroller@index')->name("index");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
