<?php

require_once 'ToyRobot.php';

// Test cases
    $robot = new ToyRobot();

    $robot->place(0, 0, 'NORTH');
    $robot->move();
    $robot->report(); // Output: 0,1,NORTH
    



    $robot->place(0, 0, 'NORTH');
    $robot->left();
    $robot->report(); // Output: 0,0,WEST
    
    $robot->place(1, 2, 'EAST');
    $robot->move();
    $robot->move();
    $robot->left();
    $robot->move();
    $robot->report(); // Output: 3,3,NORTH
