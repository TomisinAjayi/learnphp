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
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">TO-DO list</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signUp.php">Sign up</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="body">
        <h3 class="title">Kindly SIGN UP to get your data saved :)</h3>

        <form action="todo.php" method="post">
            <input type="text" name="name" id="user" value="" placeholder="Name" class="input_style">
            <span class="error"><?php echo $nameErr; ?></span>
            <input type="password" name="password" id="pwd" value="" placeholder="Password" class="input_style"> 
            <span class="error"><?php echo $passwordErr; ?></span>
            <button type="submit" class="signUp_btn">SIGN UP</button>
        </form>
        <p><a href="login.php">Already signed in? Log in</a></p>
    </div>
</body>
</html>