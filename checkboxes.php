<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post"> <br> <br>
    Apples:
    <input type="checkbox" name= "fruit[]" value="Apples"> <br> <br>
    Oranges:
    <input type="checkbox" name= "fruit[]" value="Oranges"> <br> <br>
    Mango:
    <input type="checkbox" name= "fruit[]" value="Mango"> <br> <br>
    <input type="submit">

    </form>
    <?php
        // using post method to get Oranges securely without posting it in url parameter
        // more secure and more data
        $array = $_POST["fruit"];
        echo var_dump($array);
        echo "<br>";
        
    ?>
</body>
</html>
        
  