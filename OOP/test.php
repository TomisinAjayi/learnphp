<?php
    // include class
    require "rectangle.php";

    //create new object from rectangle
    $obj = new Rectangle;

    // get object properties values
    echo $obj->length;
    echo '<br />';
    echo $obj->width;
    echo '<br />';

    // set object properties values
    $obj->length = 30;
    $obj->width = 20;

    // read the object properties values again to show the change
    echo $obj->length; 
    echo '<br />';
    echo $obj->width;
    echo '<br />';

    //call the object methods
    echo $obj->getPerimeter();
    echo '<br />';
    echo $obj->getArea();
?>