<?php

namespace projeto\biblioteca\Models\Pagina;

class Pagina
{
    
    protected $table = 'Pagina';
    
    public function getPaginas($app, $id = 1)
    {        
        return $app['entityManager']->getRepository('projeto\biblioteca\Models\Entities\Pagina')->findOneBy(array('Id' => $id));
    }
    
    public function setPagina($app, $data = [])
    {
        return $app['db']->insert($this->table, $data);
    }
}