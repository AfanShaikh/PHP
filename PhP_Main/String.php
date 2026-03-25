<?php
    $name = "Afan Shaikh";
    $name1 = "vinsmoke sanji";

    echo "<h1>Name: $name</h1>";
    echo "<hr>";
    echo "<b>Getting the length of a STR:</b>";
    echo strlen($name);
    echo "<br>";
    echo "<b>Counting a Words in STR:</b>";
    echo str_word_count($name);
    echo "<br>";
    echo "<b>Reversing a STR:</b>";
    echo strrev($name);
    echo "<br>";
    echo "<b>Finding the position of a STR:</b>";
    echo strpos($name, "Shaikh");
    echo "<br>";
    echo "<b>Replacing a text into a STR:</b>";
    echo str_replace("Shaikh","Aslam",$name);
    echo "<br>";
    echo "<b>Coverting the whole str into Uppercase:</b>";
    echo strtoupper($name);
    echo "<br>";
    echo "<b>Coverting the whole str into Lowercase:</b>";
    echo strtolower($name);
    echo "<br>";
    echo "<b>Capitalizing the First Letter of the STR:</b>";
    echo ucfirst($name1);
    echo "<br>";
    echo "<b>Capitalizing Each Words for STR:</b>";
    echo ucwords($name1);
    echo "<br>";
    echo "<b>Remove Whitespace for STR:</b>";
    echo trim($name1);
    
?>