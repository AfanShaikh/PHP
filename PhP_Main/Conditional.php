<?php
    $a = 10;
    $b = 5; 
    $num = 10;
    $marks = 95;

    echo "<h3>If Statement</h3>";
    echo "<hr>";
    if ( $a > $b) {
        echo "<b>A is greater than B.</b>";
    }
    echo "<br>";
    echo "<h3>If-else Statement</h3>";
    echo  "<hr>";
    if ($b > $a)
        {
            echo "<b>B is greater than A.</b>";
        }
        else{
            echo "<b>B is not greater than A.</b>";
        }
    echo "<br>";
    if ( $num % 2 == 0)
        {
            echo "<b>Provided Num is Even.</b>";
        }
    else{
        echo "<b>Provided Num is Odd.</b>";
    }
    echo "<br>";
    echo "<h3>If-elseif-else Statement</h3>";
    echo "<hr>";
    if($num > 0){
        echo "<b>Num Is Positive.</b>";
    }
    elseif ($num < 0)
        {
            echo "<b>Num Is Negative.</b>";
        }
    else{
        echo "<b> Num Is Zero.</b>";
    }
    echo "<br>";
    if ($marks <=100 && $marks >=91){
        echo "<b>A Grade</b>";
    }
    elseif($marks <=90 && $marks >= 81){
        echo "<b>B Grade</b>";
    }
    elseif($marks <=80 && $marks >= 71){
        echo "<b>C Grade</b>";
    }
    elseif($marks <=70 && $marks >= 61){
        echo "<b>D Grade</b>";
    }
    else{
        echo "<b>Fail</b>";
    }
    echo "<br>";
    
    $TraLight = "Green";
    if($TraLight === "Green"){
        echo "<b>If Light Is Green Then Go.</b>";
    }
    elseif($TraLight === "Yellow"){
        echo "<b>If Light Is Yellow Then Slowdown.</b>";
    }
    else{
        echo "<b>Error</b>";
    }
    echo "<br>";
    echo "<h3>Nested-If Statement</h3>";
    $Age = 18;
    $HasId = true;
    
    if($Age >= 18){
        echo "<b>Is Allowed-</b>";

        if($HasId == true){
        echo "<b>Is Eligible To Vote.</b>";
     }else{
        echo "<b>Is Not Eligible To Vote.</b>";
     }
    }else{
        echo "Is Under 18.";
    }
?>  