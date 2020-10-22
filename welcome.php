<?php
    
    if(date('G') < 12) {
        $greeting = "Good Morning!";
    } else {
        $greeting = "Welcome!";
    }
    echo $greeting;
    echo '<br />';
    //echo ($greeting);

    $myAge = 19;
    echo "My age is ".$myAge;
    echo '<br />';
    // echo "My age is $myAge";

    $intro = "My name is ";
    $myAge = 19;

    echo $intro, $myAge;
    echo '<br />';

    $name = 'Robin Jackman';
    echo "Name is $name";
    echo '<br />';
    echo 'Name is $name';
    echo '<br />';
 
    $greeting = 'Welcome';

    $name = 'Tom';
    echo "$greeting $name";
    echo '<br />';

    $name = 'Tomi';
    echo "$greeting $name";
    echo '<br />';

    $name = 'Tomisin';
    echo "$greeting $name";
    echo '<br />';

    define('SITE_URL', 'http://www.example.com');
    echo SITE_URL;
    echo '<br />';

    $empName = 'Tomi';
    $empId = 'NX-10001';
    $empSalary = 5000;
    
    $emp1 = array('tomi', 'NX-10001', 5000);
    $emp2 = array('buki', 'NX-10002', 6000);
    $emp3 = array('dami', 'NX-10003', 7000);
    
    echo $emp1[0];
    echo '<br />';
    echo $emp1[1];
    echo '<br />';
    echo $emp1[2];
    echo '<br />';
    echo $emp2[0];
    echo '<br />';
    echo $emp2[1];
    echo '<br />';
    echo $emp2[2];
    echo '<br />';
    echo $emp3[0];
    echo '<br />';
    echo $emp3[1];
    echo '<br />';
    echo $emp3[2];
    echo '<br />';

    $employees = array($emp1, $emp2, $emp3);

    echo $employees[0][0]; echo '<br />';
    echo $employees[0][1]; echo '<br />';
    echo $employees[0][2]; echo '<br />';
    echo $employees[1][0]; echo '<br />';
    echo $employees[1][1]; echo '<br />';
    echo $employees[1][2]; echo '<br />'; 

    $emp1 = array('name'=>'Tomi', 'id'=>'NX-1001', 'salary'=>500);

    echo $emp1['name'];
    echo $emp1['id'];
    echo $emp1['salary'];
    echo '<br />';
    echo count($emp1);
    echo '<br />';

    $name = 'tomi';
    $salary = 200;
    $name = 'Mrs '.$name;
    $salary = $salary+200;
    echo $name. ' has '.$salary;
    echo '<br />';

    $d = 20;
    echo ++$d;
    echo --$d;
    echo $d++;
    echo $d;
    echo '<br />';
    
    $name = "Mrs ";
    $name .= "Tomi";
    echo $name;
    echo '<br />';

    function getDiscountedPrice($amount, $percentage=10) {
        return $amount-($amount*($percentage/100));
    }
    $discountedPrice = getDiscountedPrice(100, 20);
    echo 'Original price is 100. ';
    echo '<br />';
    echo "Discounted price is $discountedPrice";
    echo '<br />';
    echo 'Disocunted price is ' . getDiscountedPrice(100, 20);
    echo '<br />';

    function printInvoiceHeader() {
        echo 'Thank You! <br />';
        echo 'Invoice of XYZ company <br />';
        echo 'Date: ' . date('Y-m-d');
        echo '<br />';
    }
    printInvoiceHeader();

    $invoiceHeader = printInvoiceHeader();
    var_dump($invoiceHeader);
    echo '<br />';

    $stages = array(50, 110, 130);
    $count = count($stages);
    $i = 0;

    while ($i < $count) {
        echo "stage $i score: ".$stages[$i]. '<br />';
        $i++;
    }

    $players[0] = array(50, 110, 130);
    $players[1] = array(50, 145, 170);
    $players[2] = array(50, 90, 205);

    $count1 = count($players);
    for ($i = 0; $i < $count1; $i++) {
        $count2 = count($players[$i]);
        echo 'Player ' . ($i+1) . ' scores: ';

        for ($j = 0; $j < $count2; $j++) {
            echo $players[$i][$j] . ', ';
        }
        echo '<br />';
    }
    $day = 'Monday ';

    var_dump($day);
    echo '<br />';
    print_r($day);

    $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

    echo '<pre>';
    var_dump($days);
    echo '<br /><br />';
    print_r($days);
    echo '<br /><br />';
    var_export($days);
    echo '</pre>';


?>



