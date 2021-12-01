<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        for($i=0; $i<=10;$i++){
            echo "$i <br>";
            // echo "<br>";
        }
        $array = array(1,2,3,4,5,6,7,8);
        for($i =0 ; $i< count($array) ; $i++){
            echo "$array[$i] <br>";
            // echo "<br>";
        }
    ?>
</body>
</html>