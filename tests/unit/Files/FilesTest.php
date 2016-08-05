<?php

namespace projeto\biblioteca\Tests\Unit\Files;

use projeto\biblioteca\Files\Csv\Csv;

class FilesTest extends \PHPUnit_Framework_TestCase
{
	protected $CSV;

    protected function setUp()
    {
        $this->CSV = new Csv;
    }

    public function testInstanceCsv()
    {
        $csv = new Csv;
        $this->assertInstanceOf(get_class($this->CSV), $csv);
     }

     public function testeSeila()
     {
     	$esperado = 3;
     	$resultado = $this->CSV->somar(1,2);

     	$this->assertEquals($esperado, $resultado);

     }

     public function testBoolSomar()
    {
        $val1 = 'a';
        $val2 = 2;
        $val3 = 2;
        $val4 = 'a';
        
        $resultado = $this->CSV->somar($val1, $val2);
        $resultado2 = $this->CSV->somar($val3, $val4);
        
        $this->assertEquals(false, $resultado);
        $this->assertEquals(false, $resultado2);
    }
}