<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="post_method.php" method="post"> <br> <br>
    Username:
    <input type="text" name= "username"> <br> <br>
    Password:
    <input type="password" name= "password"> <br> <br>
    <input type="submit">
    </form>
    <?php
        // using post method to get password securely without posting it in url parameter
        // more secure and more data
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo $username;
        echo "<br>";

        echo $password;
        echo "<br>";
    ?>
</body>
</html>