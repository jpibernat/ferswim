<?php

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

Route::get('/', 'HomeController@index');
//    ruta de la vista -- nombre del controlador -- nombre de la funcion a llamar.

// Rutas para las vistas de usuarios finales
Route::get('/preguntas', 'preguntasController@list');
//listado de preguntas y respuestas.
Route::get('/products', 'ProductsController@list');
//listado de productos.
Route::get('/product/{id}', 'ProductsController@detail');
//detalle de producto.
Route::get('/product_cat/{category_id}', 'ProductsController@cat');
//vista de productos por categoria.
Route::get('/productDetail', 'ProductDetailController@list');
Route::get('/cart', 'CartController@list');
// carrito de compras

// Rutas para las vistas de usuario administrador
Route::get('/faq', 'faqController@list');
// ruta de edicion de preguntas frecuentes. Lo que se modifique aca debera directamente influir sobre la vista preguntas
Route::get('/products', 'ProductsController@list');
// ruta de edicion de productos. Lo que se modifique aca deberia directamente influir sobre la vista de la lista de productos.
Route::get('/users', 'UsersController@list');
// ruta de edicion de usuarios.

//Route::get('/', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
