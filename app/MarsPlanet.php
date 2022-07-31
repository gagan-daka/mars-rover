<?php

namespace App;
use App\RoverProperties;

class MarsPlanet {

    public function generatePlanet() {

        $planet = array();

        for($i=0; $i < RoverProperties::PLANET_WIDTH; $i++) {
            array_push($planet, 0);
        }

        return $planet;
    }
    
}