<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO-DO</title>
    <link rel="stylesheet" href="todo.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="">TO-DO list</a>
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
        <div class="heading">
            <h2 style="text-transform:capitalize"><?php echo $_POST["username"]; echo "'s list"?></h2>
            <p class="title">Best to prepare a to-do list the night before or early in the morning.</p>
        </div>
        <form action="todolist.php" method="post" id="formSection">
            <div class="dateSection">
            <label for="taskDate">Date:</label>
            <input type="date" name="date" id="taskDate" class="task_date" value= "<?php echo $date;?>">
            </div>

            <input type="text" name="task" id="taskInput" class="task_input" value= "<?php echo $task;?>">
            <button type="button" name="addNewTask" id="newTask" class="new_task" onclick="addNewInput()">Add New Task</button>
            <input type="submit" name="submit" id="submitTodo" class="submit_todo" />
        </form>
    </div>

    <script src="todo.js"></script>
</body>
</html>