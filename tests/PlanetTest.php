<?php

use App\MarsPlanet;
use App\RoverProperties;
use PHPUnit\Framework\TestCase;

class MarsPlanetTest extends TestCase{

    /** @test */
    public function generatePlanetTest() 
    {
        $planet = new MarsPlanet();
        $message = print_r("\nSe ha generado un planeta nuevo que no tiene ningun obstaculo");
        $this->assertEquals(RoverProperties::PLANET_WIDTH, count($planet->generatePlanet(), $message));
    }
    
}