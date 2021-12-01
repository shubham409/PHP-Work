<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="calculator_using_switch.php" method="post"> <br> <br>
    Number1:
    <input type="number" step= "0.1" name= "Number1"> <br> <br>
    Operation:
    <input type="text" step= "0.1" name= "Operation"> <br> <br>
    Number2:
    <input type="number" step="0.1" name= "Number2"> <br> <br>
    <input type="submit">
    </form>
    <?php

        
        $Number1 = $_POST["Number1"];
        $Number2 = $_POST["Number2"];
        $operation = $_POST["Operation"];
        switch($operation){

        
           case "+" : 
                echo $Number1 +$Number2;
                echo "<br>";
                break;
        
           case "-" : 
                echo $Number1 -$Number2;
                echo "<br>";
                break;   
        
           case "*" : 
                echo $Number1 *$Number2;
                echo "<br>";
                break;
        
           case "/" : 
                if($Number2==0){
                    echo "Please Enter Valid Number";
                    echo "<br>";
                }
                else{
                    echo $Number1 /$Number2;
                    echo "<br>";
                }
                break;    
            default:
            echo "Please Enter Valid Operation";
            echo "<br>";
        }
    ?>
</body>
</html>