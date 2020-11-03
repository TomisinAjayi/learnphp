<?php

    function filterTask($field){
        // Sanitize string
        $field = filter_var(trim($field), FILTER_SANITIZE_TASK);
        if(!empty($field)){
            return $field;
        } else{
            return FALSE;
        }
    }
    // define variable with empty var
    $taskErr = " ";
    $task = " ";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST['taskInput'])) {
            $taskErr = "You must fill this field";
        } else {
            $task = filterTask($_POST["task"]);
            if($task == FALSE) {
                $errors = "Enter valid task";
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
    <title>TO-DO</title>
    <link rel="stylesheet" href="todo.css">
</head>
<body>
    <h1>TO-DO list</h1>
    <div class="body">
        <div class="heading">
            <h2><?php echo $_POST["name"]; echo "'s list"?></h2>
            <p>Best to prepare a to-do list the night before or early in the morning.</p>
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