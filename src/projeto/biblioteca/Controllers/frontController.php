<?php

namespace projeto\biblioteca\Controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;
use projeto\biblioteca\Models\Pagina\Pagina;

class frontController  implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('conteudo/index.twig');
        });
        
        $controllers->get('/pagina/{id}', function (Application $app, $id = 1) {
            $db = new Pagina;
            $data = $db->getPaginas($app, $id);
            
            if(count($data) > 0) {
                return $app->json($data, 200);
            }
            
            return $app->json(['result' => false], 404);
        });
        
        return $controllers;
    }
}