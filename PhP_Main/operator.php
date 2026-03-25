<?php
    echo "<h3>Arithmetic Operators</h3>";
        $a = 10;
        $b = 15;
        echo "Addition of a & b is this = ";
        echo $a + $b ."<br>";
        echo "Subtraction of a & b is this = ";
        echo $a - $b."<br>"; 
        echo "Multiplication of a & b is this = ";
        echo $a * $b."<br>"; 
        echo "Division of a & b is this = ";
        echo $a / $b."<br>"; 
        echo "Remainder of a & b is this = ";
        echo $a % $b."<br>";
        echo "Exponentiation of a & b is this =  ";
        echo $a ** $b."<br>";
        echo "<hr>";

        echo "<h3>Assignment Operators</h3>";
        echo $fnum = 10;  
        echo "<br>";
        $fnum+=2;
        echo "<br>";
        echo "Increment value of fnum: $fnum";
        $fnum-=5;
        echo "<br>";
        echo "decrement value of fnum: $fnum";
        $fnum*=4;
        echo "<br>";
        echo "Multiple by 4  value of fnum: $fnum";
        $fnum/=3;
        echo "<br>";
        echo "Division value of fnum: $fnum";
        $fnum%=2;
        echo "<br>";
        echo "Remainder value of fnum: $fnum";
        $fnum**=4;
        echo "<br>";
        echo "Exponentiation value of fnum: $fnum";
        echo "<hr>";

        echo "<h3>Comparison Operators</h3>";
        $x = 10;
        $y = 25;

        echo ($x > $y) .var_dump($x >$y);
        echo "<br>";
        echo ($x < $y) .var_dump($x < $y);
        echo "<br>";
        echo ($x == $y) .var_dump($x == $y);
        echo "<br>";
        echo ($a === "10") .var_dump($x === "10"); 
        echo "<br>";
        echo ($a === 10) .var_dump($x === 10);
        echo "<br>";
        echo ($a != $b) .var_dump($a != $b);
        echo "<br>";
        echo ($a !== $b) .var_dump($a !== $b);
        echo "<br>";
        echo ($a <= $b)  .var_dump($a <= $b);
        echo "<br>";
        echo ($a >= $b) .var_dump($a >= $b);
        echo "<hr>";

        echo "<h3>Logical Operators</h3>";
        $ans = 75;
        $ans1 = 100;

        echo ($ans < $ans1 && $ans1 > $ans) .var_dump($ans < $ans1 && $ans1 > $ans);
        echo "<br>";
        echo ($ans > $ans1 && $ans1 < $ans) .var_dump($ans > $ans1 && $ans1 < $ans);
        echo "<br>";
        echo ($ans < $ans1 || $ans1 < $ans) .var_dump($ans < $ans1 || $ans1 < $ans);
        echo "<br>";
        echo ($ans < $ans1 XOR $ans1 > $ans) .var_dump($ans < $ans1 XOR $ans1 > $ans);
        echo "<br>";
        echo ($ans < $ans1 XOR $ans1 <   $ans) .var_dump($ans < $ans1 XOR $ans1 < $ans);
?>