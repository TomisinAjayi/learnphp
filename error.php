<?php
    // try opening a non-existent file
    if(file_exists("sample.txt")) {
        $file = fopen("sample.txt", "r");
    } else {
        die("Error: file doesn't exist.");
    }
?>
