<?php 

namespace App\Model;

use App\RoverProperties;

class Rover {

    public array $start; 
    public string $commands;
    public array $obstacle;
    public array $squarePlanet;
    public int $x;
    public int $y;

    public function __construct($start, $commands, $obstacle, $squarePlanet)
    {
        $this->start = $start;
        $this->commands = $commands;
        $this->obstacle = $obstacle;
        $this->planet = $squarePlanet;
    }

    public function getStart(): array
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getCommands(): string
    {
        return $this->commands;
    }

    public function setCommands($commands)
    {
        $this->commands = $commands;
    }

    public function getObstacle(): array
    {
        return $this->obstacle;
    }

    public function setObstacle($obstacle)
    {
        $this->obstacle = $obstacle;

    }

    public function getSquarePlanet(): array
    {
        return $this->squarePlanet;
    }

    public function setSquarePlanet($squarePlanet)
    {
        $this->squarePlanet = $squarePlanet;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    
    public function getY(): int
    {
        return $this->y;
    }

    
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
}