<?php
    $days = 5;
    switch($days){
        case 1:
            echo "Monday";
        break;
        case 2:
            echo "Tuesday";
        break;
        case 3:
            echo "Wednesday";
        break;
        case 4:
            echo "Thursday";
        break;
        case 5:
            echo "Friday";
        break;
        default: echo "Weekend";
    }
    echo "<hr>";
    $marks = 79;
    switch(true){
        case ($marks <=100 && $marks >=91):
            echo "A Grade";
        break;
        case ($marks <= 90 &&  $marks >=81):
            echo "B Grade";
        break;
        case ($marks <=80 && $marks >=71):
            echo "C Grade";
        break;
        case ($marks <=70 && $marks >=61):
            echo "D Grade";
        break;
        case ($marks <=60 && $marks >=51):
            echo "E Grade";
        break;
        default: echo "Fail";
    }
    echo "<hr>";
    $num = 250;
    $num1 = 200;
    $oper = "**";

    switch($oper){
        case "+":
            echo "<b>Addition</b>:";
            echo ($num + $num1);
        break;        
        case "-":
            echo "<b>Subtraction</b>:";
            echo ($num - $num1);
        break;
        case "*":
            echo "<b>Multiplication</b>:";
            echo ($num * $num1);
        break;
        case "/":
            echo "<b>Division</b>:";
            echo ($num / $num1);
        break;
        case "%":
            echo "<b>Remainder</b>:";
            echo ($num % $num1);
        break;
        default: echo "<b>Enter an operation</b>";
    }
?>