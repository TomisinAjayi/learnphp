<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload Form</title>
    <style>
        input[type=submit] {
            display: block;
        }
    </style>
</head>
<body>
    <form action="upload-manager.php" method="post" enctype="multipart/form-data" >
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> only .jpg, .jpeg, .gif, .png formarts are allowed to a max size of 5 MB.</p>
    </form>
</body>
</html>