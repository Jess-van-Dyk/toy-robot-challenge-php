<?php

    class ToyRobot 
    {
        private $x;
        private $y;
        private $facing;
        private $tableWidth = 5;
        private $tableHeight = 5;
        private $directions = ['NORTH', 'EAST', 'SOUTH', 'WEST'];

        
        public function __construct() {
            // Within the constructor, the robot has not been placed on the table yet. 
            $this->x = -1; 
            $this->y = -1;
            $this->facing = '';
        }

        public function place($x, $y, $facing) {
            if ($this->isValidPosition($x, $y) && in_array($facing, $this->directions)) {
                $this->x = $x;
                $this->y = $y;
                $this->facing = $facing;
            }
        }

        public function move() {
            if ($this->isPlaced()) {
                $newX = $this->x;
                $newY = $this->y;

                switch ($this->facing) {
                    case 'NORTH':
                        $newY++;
                        break;
                    case 'EAST':
                        $newX++;
                        break;
                    case 'SOUTH':
                        $newY--;
                        break;
                    case 'WEST':
                        $newX--;
                        break;
                }

                if ($this->isValidPosition($newX, $newY)) {
                    $this->x = $newX;
                    $this->y = $newY;
                }
            }
        }

        public function left() {
            if ($this->isPlaced()) {
                $currentDirection = array_search($this->facing, $this->directions);
                $newDirection = ($currentDirection + 3) % 4;
                $this->facing = $this->directions[$newDirection];
            }
        }

        public function right() {
            if ($this->isPlaced()) {
                $currentDirection = array_search($this->facing, $this->directions);
                $newDirection = ($currentDirection + 1) % 4;
                $this->facing = $this->directions[$newDirection];
            }
        }

        public function report() {
            if ($this->isPlaced()) {
                echo "{$this->x},{$this->y},{$this->facing}\n";
            }
        }

        private function isValidPosition($x, $y) {
            return $x >= 0 && $x < $this->tableWidth && $y >= 0 && $y < $this->tableHeight;
        }

        private function isPlaced() {
            return $this->x !== -1 && $this->y !== -1;
        }
    }
