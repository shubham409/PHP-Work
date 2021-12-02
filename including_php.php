<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "shubham";
        $location = "Delhi";
        $word_count = 90;
        include "article_header.php";
    ?>

    <?php 
        $name = "shubham";
        include "extra_php.php";
        show_name($name);
        echo "<h1>".$variable_in_extra_php."</h1>";
        echo "<br>";
    ?>
</body>
</html>