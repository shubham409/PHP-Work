<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="get">
        Number1:
        <input type="text" name= "number1">
        Number2:
        <input type="text" name= "number2">

        <input type="submit">
    </form>
    <?php
        // using querry parameter to add to number 
        // http://localhost:4000/getting_user_input.php?number1=20&number2=55
        
        $num1 = $_GET["number1"];
        $num2 = $_GET["number2"];

        echo $num1+$num2;
        echo "<br>";
    ?>
</body>
</html>