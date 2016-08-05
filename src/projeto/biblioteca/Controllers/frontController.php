<?php

namespace projeto\biblioteca\Controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;
use alunos\biblioteca\Models\Pagina\Pagina;

class frontController  implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('conteudo/index.twig');
        });
        return $controllers;
    }
}