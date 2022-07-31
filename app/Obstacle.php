<?php

namespace App;

use App\Model\Rover;
use App\RoverProperties;

class Obstacle {

    public function generateObstacles(): array
    {
        $randomObstacles = [];

        for($obstaclePosition = 0; $obstaclePosition < RoverProperties::TOTAL_OBSTACLES; $obstaclePosition++) {
            $x = rand(0, 10);
            $y = rand(0, 10);
            $obstacle = array($x, $y);
            array_push($randomObstacles, $obstacle);
        }

        return $randomObstacles;

    }
    
}