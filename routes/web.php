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
//vista de detalle de producto.
Route::get('/cart', 'CartController@list');
// carrito de compras

// Rutas para las vistas de usuario administrador
Route::get('/faq', 'faqController@list');
// ruta de edicion de preguntas frecuentes. Lo que se modifique aca debera directamente influir sobre la vista preguntas
Route::get ('/addQuestion', function(){
    return view('addQuestion');
});
//ruta GET que redirige al formulario para agregar una pregunta al listado de preguntas frecuentes.
Route::post ('/addQuestion', 'faqController@add');
//ruta POST de la vista para mostrar el formulario para agregar una pregunta a la vista de pŕeguntas y respuestas
Route::get('/products', 'ProductsController@list');
// ruta de edicion de productos. Lo que se modifique aca deberia directamente influir sobre la vista de la lista de productos.
Route::get('/users', 'UsersController@list');
// ruta de edicion de usuarios.
Route::get ('/addProduct', function(){
    return view('addProduct');
});
//ruta de la vista para mostrar el formulario para agregar un producto
Route::post ('/addProduct', 'ProductsController@add');
//ruta POST de la vista para mostrar el formulario para agregar un producto
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

//ruta para la vista de preguntas como usuario final
Route::get('/preguntas', 'preguntasController@list')->name('preguntas');

Auth::routes();