<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="mad_lib_game.php" method="get"><br>
    Flower:
    <input type="text" name= "flower"><br>
    Color:
    <input type="text" name= "color"><br>
    Name:
    <input type="text" name= "name"><br>

    <input type="submit">
    </form>
    <?php

        $flower = $_GET["flower"];
        $color = $_GET["color"];
        $name = $_GET["name"];

        echo "$flower are red";
        echo "<br>";

        echo "Violets are $color";
        echo "<br>";

        echo "My Favourite character is $name";
        echo "<br>";
    ?>
</body>
</html>