<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email with PHP</title>
</head>
<body>
    <form action="send_script.php" method="post">
        Name: <input type="text" name="name"> <br>
        Email: <input type="email" name="email"> <br>
        Subject: <input type="text" name="subject"> <br>
        Message: <textarea name="msg" cols="30" rows="10"></textarea>
        <button type="submit" name="send_message_btn">Send</button>
    </form>
</body>
</html>