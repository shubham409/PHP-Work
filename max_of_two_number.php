<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        function getmax($num1,$num2){
            if($num1>$num2){
                return $num1;
            }   
            else{
                return $num2;
            }
        }
        echo getmax(10,20);
        echo "<br>";
    ?>
</body>
</html>