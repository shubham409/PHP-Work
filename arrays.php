<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        $array = array(0,1,2,3,"shubham", 5);
        // total number of element 
        echo count($array);
        echo "<br>";
        
        echo var_dump($array);
        echo "<br>";

        //updating element at a given index
        $array[0] ="start";
        echo $array[0];
        echo "<br>";

        // inserting element at last index 
        echo $array[6]="last";
        echo "<br>";
        echo var_dump($array);
        echo "<br>";    
        
        //  inserting element beyond last position
        echo $array[100]="hundred";
        echo "<br>";
        echo var_dump($array);
        echo "<br>"; 
        echo var_dump($array[99]);
        echo "<br>";   


    ?>
</body>
</html>