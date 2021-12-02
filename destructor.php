<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        class Student{
            function __destruct(){
                echo "Destructor is called";
                echo "<br>";
            }
        }
        $object = new Student();
        
        
    ?>
        
</body>
</html>