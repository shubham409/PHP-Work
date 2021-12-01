<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="calculator_with_ifelse.php" method="post"> <br> <br>
    Number1:
    <input type="number" step= "0.1" name= "Number1"> <br> <br>
    Operation:
    <input type="text" step= "0.1" name= "Operation"> <br> <br>
    Number2:
    <input type="number" step="0.1" name= "Number2"> <br> <br>
    <input type="submit">
    </form>
    <?php
        // using post method to get Number2 securely without posting it in url parameter
        // more secure and more data
        
        $Number1 = $_POST["Number1"];
        $Number2 = $_POST["Number2"];
        $operation = $_POST["Operation"];
        if($operation=="+"){
            echo $Number1 +$Number2;
            echo "<br>";
        }
        elseif($operation=="-"){
            echo $Number1- $Number2;
            echo "<br>";
        }
        elseif($operation=="*"){
            echo $Number1 *$Number2;
            echo "<br>";
        }
        elseif($operation=="/"){
            if($Number2==0){
                echo "Can not divide by zo";
                echo "<br>";
            }
            else{
                echo $Number1 /$Number2;
                echo "<br>";
            }

        }
        else{
            echo "Pls enter valid operation";
            echo "<br>";
        }
    ?>
</body>
</html>