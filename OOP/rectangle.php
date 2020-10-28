<?php
    class Rectangle {
        // declare properties
        public $length = 0;
        public $width = 0;

        // method to get perimeter
        public function getPerimeter(){
            return(2* ($this ->length + $this ->width));
        }
        // method to get the area
        public function getArea(){
            return ($this ->length * $this->width);
        }
    }
?>