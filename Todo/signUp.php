<?php
    function filterName($field){
        // Sanitize user name
        $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
        
        // Validate user name
        if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            return $field;
        } else{
            return FALSE;
        }
    }
    function filterString($field){
        // Sanitize string
        $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
        if(!empty($field)){
            return $field;
        } else{
            return FALSE;
        }
    }
    // Define variables and initialize with empty values
    $nameErr = $passwordErr = "";
    $name =  $password = "";
    // Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }

    // Validate user passowrd
    if(empty($_POST["password"])){
        $passwordErr = "Please enter your password.";     
    } else{
        $password = filterString($_POST["password"]);
        if($password == FALSE){
            $passwordErr = "Please enter a valid password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <h1>TO-DO list</h1>
    <div class="body">
        <h3>Kindly SIGN UP to get your data saved :)</h3>

        <form action="todo.php" method="post">
            <input type="text" name="name" id="user" value="" placeholder="Name">
            <span class="error"><?php echo $nameErr; ?></span>
            <input type="password" name="password" id="pwd" value="" placeholder="Password"> 
            <span class="error"><?php echo $passwordErr; ?></span>
            <button type="submit">SIGN UP</button>
        </form>
        <p><a href="login.php">Already signed in? Log in</a></p>
    </div>
</body>
</html>