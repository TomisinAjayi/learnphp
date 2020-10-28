<?php
    if(isset($_REQUEST["file"])) {
        // get parameters
        $file = urldecode($_REQUEST["file"]); // decode URL encoded string

        // test whether the file name contains illegal characters such as "../" using the regular expression
        if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)) {
            $filepath = "images/" . $file;

            // process download
            if(file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' .basename($filepath). '"');
                header('Expires: 0');
                header('Cacher-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filepath));
                flush(); // flush system output buffer
                readfile($filepath);
                die();
            } else {
                http_response_code(404);
                die();
            }
        } else {
            die("Invalid file name!");
        }
    }
?> 
