<?php

namespace Controllers;

use MVC\Router;


class PonentesController {

    public static function index(Router $router) {
        $router->render('admin/dashboard/index', [
            'titulo' => 'Ponentes / Conferencistas'
        ]);
    }
}