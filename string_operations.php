<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
        $string = "Sample String";
        // converting case
        echo strtolower($string);
        echo "<br>";

        echo strtoupper($string);
        echo "<br>";

        // srtring indexing
        echo $string[1];
        echo "<br>";

        echo "Author"[1];
        echo "<br>";

        echo str_replace("Sample" , "Demo", $string);
        echo "<br>";

        echo $string;
        echo "<br>";

        echo substr($string , 7,6);
        echo "<br>";
    ?>
</body>
</html>