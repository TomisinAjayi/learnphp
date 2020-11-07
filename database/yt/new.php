<?php
    $user = 'root';
    $password = 'Adeola66.';
    $db = 'testdb';

    $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");
    echo "great work";
?>