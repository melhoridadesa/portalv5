<?php

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {//Verifica se a requisição realmente é do index.php
    return false;
}

require_once __DIR__.'/../src/app.php';

$app->mount('/', new projeto\biblioteca\Controllers\frontController);
$app->run();