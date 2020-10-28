<?php
    // sample user comment
    $comment = "<h1>Hey There! How are you doing?</h1>";

    // sanitize and print comment string
    $sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
    echo $sanitizedComment;

    // sample integer value
    $int = 20;

    // validate sample integer  value
    if(filter_var($int, FILTER_VALIDATE_INT)) {
        echo "The <b>$int</b> is a valid integer";
    } else {
        echo "The <b>$int</b> is not a valid integer";
    }

    $int = 0;

    if(filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)) {
        echo "The <b>$int</b> is a valid integer";
    } else {
        echo "The <b>$int</b> is not a valid integer";
    }
?>