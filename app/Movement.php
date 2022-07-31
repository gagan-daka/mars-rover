<?php 

namespace App;

use App\Model\Rover;

class Movement {

    public $rover;
    
    public function __construct(Rover $rover)
    {
        $this->rover = $rover;
    }

    public function getRover(): Rover
    {
        return $this->rover;
    }

    public function setRover(Rover $rover)
    {
        $this->rover = $rover;
    }

    public function roverMovement($command)
    {
        //FFRRFFFRL

        $x = RoverProperties::START_X_POSITION;
        $y = RoverProperties::START_Y_POSITION;

        $detectObstacles = new Obstacle();
        

        /*
        SI ROVER AVANZA(F O W) SU POSICION EN EL EJE "Y" INGREMENTA
        SI ROVER GIRA A LA IZQUIERDA(L) SU POSICION EN EL EJE "X" DECREMENTA
        SI ROVER GIRA A LA DERECHA(R) SU POSICIÓN EN EL EJE "X" INCREMENTA
        SI ROVER RETROCEDE(S) SU POSICION EN EL EJE "Y" DECREMENTA
        */

        for($letter = 0; $letter < strlen($command); $letter++) {
            if($command[$letter] === 'F'
            || $command[$letter] === 'f' 
            || $command[$letter] === 'W' 
            || $command[$letter] === 'w') {
                $y++;
            }elseif($command[$letter] === 'R' || $command[$letter] === 'r') {
                $x++;
            }elseif($command[$letter] === 'L' || $command[$letter] === 'l') {
                $x--;
            }else{
                //S
                $y--;
            }
            
            /*
            foreach($detectObstacles->generateObstacles() as $obstacle) {
                if($obstacle == [$this->x, $this->y]) {
                    return true;
                }else{
                    return false;
                }
            }
            */
            
        }

        return [$x, $y];
    }

    public function roverOrientation(string $orientation)
    {
        
        $orientation = strtoupper($orientation);
        $x = RoverProperties::START_X_POSITION;
        $y = RoverProperties::START_Y_POSITION;
        
        //N,S,E,W
        if($orientation === 'N') {
            $y++;
        }elseif ($orientation === 'S') {
            $y--;
        } elseif ($orientation === 'E') {
            $x++;
        } else {
            //W
            $x--;
        }

        return [$x, $y];
    }
}