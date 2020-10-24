<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="registration.css">
        <h2>Sign Up</h2>
        <form action="modified.php" name="form1" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="form_group">
                    <label for="">First Name:</label>
                    <input type="text" name="fname" id="" value="" required />
                </div>
                <div class="form_group">
                    <label for="">Middle Name:</label>
                    <input type="text" name="mname" id="" value="" required />
                </div>
                <div class="form_group">
                    <label for="">Last Name:</label>
                    <input type="text" name="lname" id="" value="" required />
                </div>
                <div class="form_group">
                    <label for="">Password:</label>
                    <input type="password" name="pwd" id="" value="" required />
                </div>
                <div class="form_group">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="cpwd" id="" value="" required />
                </div>
                <div class="form_group">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="" value="" required />
                </div>
                <div class="form_group">
                    <label for="">Contact No:</label>
                    <input type="phone" name="phone" id="" value="" required />
                </div>
                <div class="form_group">
                    <input type="submit" name="button" value="Submit">
                </div>
            </div>
        </form>
    </body>
</html>