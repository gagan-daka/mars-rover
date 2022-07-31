<?php

namespace Test;

use App\Model\Rover;
use App\Movement;
use App\RoverProperties;
use PHPUnit\Framework\TestCase;

class MovementTest extends TestCase{

    public Rover $rover;
    public $start = RoverProperties::START_POSITION;

    public function roverSetUp(): Rover
    {
        $commands = RoverProperties::COMMAND;
        $obstacle = RoverProperties::DEFAULT_OBSTACLE;
        $squarePlanet = RoverProperties::MARS;

        $this->rover = new Rover($this->start, $commands, $obstacle, $squarePlanet);

        return $this->rover;
    }

    /** @test */
    public function roverMovementTest()
    {
       
       $roverSetUp = $this->roverSetUp();

        $roverMovement = new Movement($roverSetUp);

        $roverMovement->roverOrientation('N');

        $roverMoveCommands = $roverMovement->roverMovement(RoverProperties::COMMAND);

        $roverLastPosition = $roverMoveCommands[0].','.$roverMoveCommands[1];

        $message = print_r("\nRover se mueve correctamente y su posicion actual es (".$roverLastPosition.")");
        $this->assertNotEquals($this->start, $roverMoveCommands, $message);

    }
    
    /** @test */
    public function roverWestRotationTest()
    {
        $roverSetUp = $this->roverSetUp();

        $roverMovement = new Movement($roverSetUp);

        $roverOrientation = $roverMovement->roverOrientation('W');

        $expectedCoordinates = [-1,0];

        $message = print_r("\nRover gira correctamenta hacia el Oeste");

        $this->assertEquals($expectedCoordinates, $roverOrientation, $message);
    }

     /** @test */
     public function roverEastRotationTest()
     {
         $roverSetUp = $this->roverSetUp();
 
         $roverMovement = new Movement($roverSetUp);
 
         $roverOrientation = $roverMovement->roverOrientation('E');
 
         $expectedCoordinates = [1,0];
 
         $message = print_r("\nRover gira correctamenta hacia el Este");
 
         $this->assertEquals($expectedCoordinates, $roverOrientation, $message);
     }
    
     /** @test */
     public function roverNorthRotationTest()
     {
         $roverSetUp = $this->roverSetUp();
 
         $roverMovement = new Movement($roverSetUp);
 
         $roverOrientation = $roverMovement->roverOrientation('N');
 
         $expectedCoordinates = [0,1];
 
         $message = print_r("\nRover gira correctamenta hacia el Norte");
 
         $this->assertEquals($expectedCoordinates, $roverOrientation, $message);
     }

     /** @test */
     public function roverSouthRotationTest()
     {
         $roverSetUp = $this->roverSetUp();
 
         $roverMovement = new Movement($roverSetUp);
 
         $roverOrientation = $roverMovement->roverOrientation('S');
 
         $expectedCoordinates = [0,-1];
 
         $message = print_r("\nRover gira correctamenta hacia el Sud");
 
         $this->assertEquals($expectedCoordinates, $roverOrientation, $message);
     }

     /** @test */
     public function movingTowardsTheCoordinatesOfAnObstacleTest()
     {
        $roverSetUp = $this->roverSetUp();

        $roverMovement = new Movement($roverSetUp);

        $roverMovement->roverOrientation('N');

        $roverMoveCommands = $roverMovement->roverMovement('RF');
        $obstaclePosition = RoverProperties::DEFAULT_OBSTACLE;
        $roverLastPosition = $roverMoveCommands[0].','.$roverMoveCommands[1];

        $message = print_r("\nRover ha encontrado un obstaculo en la posicion (".$roverLastPosition.")");
        
        $this->assertEquals($obstaclePosition, $roverMoveCommands, $message);

     }
}