<?php include("connection.php") ?>

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
            <?php include("errors.php"); ?>
            <input type="text" name="username" id="user" value="" placeholder="Name" class="input_style">
            <input type="email" name="email" id="userEmail" placeholder="E-mail Address" class="input_style">
            <input type="password" name="password_1" id="pwd" value="" placeholder="Password" class="input_style"> 
            <input type="password" name="password_2" id="cpwd" placeholder="Confirm Password" class="input_style">
            <button type="submit" name="reg-btn" class="signUp_btn">SIGN UP</button>
        </form>
        <p><a href="login.php">Already signed in? Log in</a></p>
    </div>
</body>
</html>