<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__.'/../src/app.php';

// Chama a DotEnv onde se obtem as configuracoes do projeto
(new Dotenv\Dotenv(__DIR__.'/../'))->load();

$app->register(new Silex\Provider\DoctrineServiceProvider(), [
    'dbs.options' => 
    [
        'portalv5_default' => 
        [
            'driver'   => 'pdo_mysql',
            'host'     => getenv('DB_HOST'),
            'dbname'   => getenv('DB_NAME'),
            'user'     => getenv('DB_USER'),
            'password' => getenv('DB_PASS'),
            'charset'  => getenv('DB_CHARSET'),
        ]
    ],
]);
    
$paths = array("src/projeto/biblioteca/Models/Entities/Api");
$isDevMode = false;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$driverImpl = $config->newDefaultAnnotationDriver('src/projeto/biblioteca/Models/Entities/Api');
$config->setProxyDir('src/projeto/biblioteca/Models/Entities/Api');
$config->setProxyNamespace('src\projeto\biblioteca\Models\Entities\Api');
$config->setAutoGenerateProxyClasses(true);
//Conexão Default do projeto poraval v4
$entityManager = EntityManager::create($app['dbs.options']['portalv5_default'], $config);
$app['entityManager'] = $entityManager;