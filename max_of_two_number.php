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

        function getmaxthree($num1,$num2,$num3){
            if($num1>$num2){
                if($num1>$num3){
                    return $num1;
                }
                else{
                    return $num2;
                }
            }   
            else{
                if($num2>$num3){
                    return $num2;
                }
                else{
                    return $num3;
                }
            }
        }
        echo getmaxthree(30,20,20);
        echo "<br>";
        echo getmaxthree(20,30,20);
        echo "<br>";
        echo getmaxthree(20,20,30);
        echo "<br>";
    ?>
</body>
</html>