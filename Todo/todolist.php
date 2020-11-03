<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO-DO</title>
    <link rel="stylesheet" href="todolist.css">
</head>
<body>
    <div class="heading">
        <h4>New DAY? Create a new TO-DO?</h4>
        <button><a href="todo.php" class="new_todo">New Todo</a></button>
    </div>
    <div class="todo_list">
        <h2>
            <?php 
                $date = $_POST['date'];
                $orgDate = $date;
                $newDate = date("l, d F Y", strtotime($orgDate));
                echo $newDate; 
            ?>
        </h2>
        <div class="task_section">
            <input type="checkbox" id="taskInput" name="task" value=" ">
            <label for="taskInput"> <?php echo $_POST['task'] ?></label>
            <a href="todo.php?del_task=<?php echo $_POST['task'] ?>" class="delete_btn" type="button">x</a>
            <hr>
        </div>
        <div >
            <a href="" class="moreTasks">More Tasks?</a>
        </div>
    </div>

    <script src="todolist.js"></script>
</body>
</html>