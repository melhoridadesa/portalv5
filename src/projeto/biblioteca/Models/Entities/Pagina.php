<?php

namespace projeto\biblioteca\Models\Entities;

/**
 * 
 * @Entity
 * @Table(name="Pagina")
 */
class Pagina 
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="Id")
     */
    public $Id;
    
    /**
     * @Column(type="string", nullable=false, name="Titulo")
     */
    public $Titulo;
    
    /**
     * @Column(type="string", nullable=false, name="Corpo")
     */
    public $Corpo;
    
    /**
     * @Column(type="integer", nullable=false, name="Posicao")
     */
    public $Posicao;
    
    /**
     * @Column(type="datetime", nullable=false, name="DataHoraUpdate")
     */
    public $DataHoraUpdate;
    
    public function getIDPagina() 
    {
        return $this->Id; 
    }
    
    public function getTituloPagina()
    {
        return $this->Titulo; 
    }
    
    public function getPosicaoPagina()
    {
        return $this->Posicao; 
    }
    
    public function getDataHoraUpdate()
    {
        return $this->DataHoraUpdate;
    }
}