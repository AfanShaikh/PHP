<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
        $name = "Afan Shaikh";
        echo $name;
        echo "<br>";
        echo "My name is $name";
        echo "<br>";
        echo "<hr>";
        echo "<h1>Realme 15X 5G Smartphone</h1>";
        // echo "<br>"; 
        $name = "Realme 15x";
        $storage = "RAM:8GB ROM:128GB";
        $version = "Android 15";
        $brand = "Realme";
        $price = 17999;
        $color = "Aqua Blue";

        echo "Name: $name<br>";
        echo "Storage: $storage<br>";
        echo "Version: $version<br>";
        echo "Brand: $brand<br>";
        echo "Price: $price<br>";
        echo "Color: $color<br>";
        // DataTypes 
        echo "<br>";
        echo var_dump($name);
        echo "<br>";
        echo var_dump($storage);
        echo "<br>";
        echo var_dump($version);
        echo "<br>";
        echo var_dump($brand);
        echo "<br>";
        echo var_dump($price);
        echo "<br>";
        echo var_dump($color);
     ?>
</body>
</html>