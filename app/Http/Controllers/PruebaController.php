<?php

namespace LaraDex\http\Controllers;

use LaraDex\http\Controllers\Controller;

class PruebaController extends Controller {
    public function prueba($param) {
        return 'Estoy dentro de prueba controller y recibi este parámetro: ' . $param;
    }
}