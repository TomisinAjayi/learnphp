<?php
    // values passed from form in login.php
    $username = $_POST["user"];
    $password = $_POST["pwd"];

    //prevent sql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    //connect to server and select database
    mysql_connect("localhost", "root", "Adeola66.");
    mysql_select_db("testdb");

    //query the database for user
    $result = mysql_query("select * from users when username = '$username' and password = '$password' ") or die("Failed to query database". mysql_error());
    $row = mysql_fetch_array($result);
    if ($row["user"] == $username && $row["pwd"] == $password) {
        echo "Login sucess!!! welcome " .$row["user"];
    } else {
        echo "failed to login";
    }
?>