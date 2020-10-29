function addNewInput(){
    
    var x = document.getElementById("formSection");
    // create an input field to insert
    var new_field = document.createElement("input");
    // set input field data type to text
    new_field.setAttribute("type", "text");
    // set input field name 
    new_field.setAttribute("name", "task");
    new_field.style.display = "block";
    new_field.style.padding = "7px 22px";
    new_field.style.marginTop = "5px";
    new_field.style.textAlign = "center";
    new_field.style.marginLeft = "38%";
    new_field.style.marginBottom = "10px";
    // select last position to insert element before it
    var pos = x.childElementCount;

    // insert element
    x.insertBefore(new_field, x.childNodes[pos]);

    var y = window.matchMedia("(min-width: 700px)");

   if(y.matches) {
        new_field.style.marginLeft = "38%";
    } else {
        new_field.style.marginLeft = "17%";
    }

    inputDeviceStyle(y);
    y.addListener(inputDeviceStyle);
}


// function inputDeviceStyle(y) {
    
    
// }
