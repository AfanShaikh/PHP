<?php
    echo "<h3>String - text in quotes</h3>";
    $firstName = "Afan";
    $greeting = "Assalamualaikum";
    echo $firstName ."<br>" ."says" .$greeting;
    echo "<hr>";

    echo "<h3>Integer - Whole numbers</h3>";
    $age = 20;
    $score = 40;
    echo "Age: $age";
    echo "<br>";
    echo "Scored $score marks on the math test";
    echo "<hr>";

    echo "<h3>Float - Decimal numbers</h3>";
    $sem1 = 5.8;
    $sem2 = 5.9;
    $sem3 = 6.4;
    $sem4 = 7.4;
    $sem5 = 5.9;
    $sem6 = 6.40;
    $scgp = 6.13;

    echo "Sem-1 CGP: $sem1";
    echo "<br>";
    echo "Sem-2 CGP: $sem2";
    echo "<br>";
    echo "Sem-3 CGP: $sem3";
    echo "<br>";
    echo "Sem-4 CGP: $sem4";
    echo "<br>";
    echo "Sem-5 CGP: $sem5";
    echo "<br>";
    echo "Sem-6 CGP: $sem6";
    echo "<br>";
    echo "Overall SCGP: $scgp";
    echo "<hr>";

    echo "<h3>Boolean - True or False</h3>";
    $isLoggedIn = true;
    $hasPermission = false;
    echo var_dump($isLoggedIn);
    echo "<br>";
    echo var_dump($hasPermission);
    echo "<hr>";

    echo "<h3>Array - Multiple values</h3>";
    $fruits = ["Apple","Mango","Banana","Jackfruit","Peach"];
    echo $fruits[0];
    echo "<br>";
    echo $fruits[1];
    echo "<br>";
    echo $fruits[2];
    echo "<br>";
    echo $fruits[3];
    echo "<br>";
    echo $fruits[4];
    echo "<hr>";

    echo "<h3>Object - Form a class</h3>";
    class Student {
        public $name;
        public $grade;
    }
    $s1 = new Student();
    $s1 ->name = "Alice";
    $s1 ->grade = "A";
    echo "Name: $s1->name";
    echo "<br>";
    echo "Grade: $s1->grade";
    echo "<hr>";

    echo "<h3>Null - Empty / No values</h3>";
    $DOB = null;
    echo var_dump($DOB);
?>