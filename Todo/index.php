
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form id="form" method="POST" action="index.php">
                <input type="text" name="text_field[]">
                <input type="date" name="date" id="" value="<?php echo $date; ?>">
                <button type="submit">SUBMIT</button>
            </form>
            <button onclick="add_field()">ADD FIELD</button>
            <script>
                function add_field(){
    
                    var x = document.getElementById("form");
                    // create an input field to insert
                    var new_field = document.createElement("input");
                    // set input field data type to text
                    new_field.setAttribute("type", "text");
                    // set input field name 
                    new_field.setAttribute("name", "text_field[]");
                    
                    // select last position to insert element before it
                    var pos = x.childElementCount;
    
                    // insert element
                    x.insertBefore(new_field, x.childNodes[pos]);
                }
            </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container1">
        <button class="add_form_field">Add New Field &nbsp; 
        <span style="font-size:16px; font-weight:bold;">+ </span>
        </button>
        <div><input type="text" name="mytext[]"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var max_fields = 10;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });

            $(wrapper).on("click", ".delete", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>
</body>
</html>