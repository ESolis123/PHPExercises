<?php

class ProgramWindow
{
    public $x, $y, $width, $height;
    /*
        1. Define the properties of the Program Window
            Using the provided class scaffold, provide the properties for the x, y,
            height, and width values.
    */

    /*
        2. Define the initial values for the program window
            Define a constructor function for ProgramWindow.
            It should not take any arguments, but during the constructor execution
            set the default values for its properties.

            It should set the initial x and y values to 0.
            It should set the initial width and height to an 800x600 screen size.
        */
    public function __construct(){
        $this -> x = 0;
        $this -> y = 0;
        $this -> width = 800;
        $this -> height = 600;
    }

    /*3. Define a function to resize the window
            Define a new class in Size.php for a Size class.
            It should take constructor arguments to set an height and width property.
            Additionally ProgramWindow requires a resize function, which receives the Size
            object instance and updates its own properties.
    */

    public function resize($size){
        $this -> width = $size -> width;
        $this -> height = $size -> height; 
    }


    /*
      4. Define a function to move the window
            Define a new class in Position.php for a Position class.
            It should take constructor arguments to set a y and x property.
            Additionally ProgramWindow requires a move function, which receives the
            Position object instance and updates its own properties.

    */

    public function move($position){
        $this -> x = $position -> x;
        $this -> y = $position -> y;
    }
}