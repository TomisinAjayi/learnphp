<?php
    echo date("Y/M/d") . "<br />";
    echo date("y-m-d") . "<br />";
    echo date("d.m.y") . "<br />";
    echo date("h:i:s") . "<br />";
    echo date("F d, Y h:i:s A") . "<br />";
    echo date("h:i a") . "<br />";

    $timestamp = time();
    echo ($timestamp) . "<br />";

    // $timestamp = 1603735119;
    // echo (date("F d, Y h:i:s", $timestamp));
    
    echo mktime(19, 20, 48, 10, 20, 2020) . "<p style=display:inline> Lekki shootout</p>". "<br />";
    // the day i was born
    echo date('l', mktime(0, 0, 0, 1, 13, 2001));
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tomi</title>
</head>
<body>
    <?php include "contact.php"; ?>
</body>
</html>

<?php
    $dir = "testdir";

    if(!file_exists($dir)) {
        if(mkdir($dir)) {
            echo "Directory created successfully.";
        } else {
            echo "ERROR: Directory could not be created.";
        }
    }else {
        echo "ERROR: Directory already exists.";
    }

    $file = "process-contact.php";

    $newfile = "testdir/process-contact.php";

    if(file_exists($file)) {
        if(copy($file, $newfile)) {
            echo "File copied successsfully";
        } else {
            echo "error";
        } 
    } else {
        echo "error";
    }

    
?>