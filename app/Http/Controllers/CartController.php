<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list() {
        dd("Esto es un echo de la funcion listar en el controlador del Carrito, esta funcion deberia retornar la lista de los productos agregados al carrito por el usuario, dando la posibilidad de editar el contenido del mismo.");

        public function __construct()
        {
          if(!\Session::has('cart')) \Session::put('cart', array());
        }

     ///Esto deberia mostrar el carrito
    public function show()
    {
      return \Session::get('list');
    }
    





}
