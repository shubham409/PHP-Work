<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
        echo 5+9;
        echo "<br>";

        echo 5-9;
        echo "<br>";

        echo 5*9;
        echo "<br>";

        // result is float
        echo 5/9;
        echo "<br>";

        // result in int
        echo var_dump(14/7);
        echo "<br>";

        // result is float
        echo var_dump(22/7);
        echo "<br>";

        //result is float 8
        echo var_dump(8.00);
        echo "<br>";

        // result is float 1
        echo var_dump(8.00/8);
        echo "<br>";

        // result is float 1
        echo var_dump(8/8.00);
        echo "<br>";

        // result is float 1       
        echo var_dump(8.00/8.00);
        echo "<br>";

        // assignment operations

        $number = 80;
        $number+=5;
        echo $number;
        echo "<br>";

        $number = 80;
        $number-=5;
        echo $number;
        echo "<br>";

        $number = 80;
        $number/=5;
        echo $number;
        echo "<br>";

        $number = 80;
        $number*=5;
        echo $number;
        echo "<br>";
        
        $number = 83;
        $number%=5;
        echo $number;
        echo "<br>";      
        

    ?>
</body>
</html>