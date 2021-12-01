<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="getting_user_input.php" method="get">

        Number1:
        <input type="text" name= "number1">

        <input type="submit">
    </form>
    <?php
        // http://localhost:4000/getting_user_input.php?number1=20

        $num1 = $_GET["number1"];
        echo $num1;
        echo "<br>";
    ?>
</body>
</html>