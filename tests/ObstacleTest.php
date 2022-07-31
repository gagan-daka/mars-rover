<?php

namespace Test;


use App\Obstacle;
use App\RoverProperties;
use PHPUnit\Framework\TestCase;

class ObstacleTest extends TestCase{

    /** @test */
    public function checkIfObstaclesAlreadyGeneratesTest()
    {
        $obstacles = new Obstacle();

        $allOsbtacles = $obstacles->generateObstacles();
        $totalObstacles = count($allOsbtacles);
        
        $message = print_r("\nSe ha generado ".RoverProperties::TOTAL_OBSTACLES." posiciones aleatorias de obstaculos, a continuación sus respectivas posiciones: ");
        $this->assertEquals(RoverProperties::TOTAL_OBSTACLES, $totalObstacles, $message);
        print_r("\n");
        print_r($allOsbtacles);
    }

   

    
}