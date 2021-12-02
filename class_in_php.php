<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        class Student{
            var $name;
            var $roll;
            var $branch;
        }
        // object
        $student1 = new Student;
        // assgning student 
        $student1->name = "shubham";
        $student1->roll = 409;
        $student1->branch = "CSE";
        
        // using object
        echo $student1->name;
        echo "<br>";
        echo $student1->roll;
        echo "<br>";
        echo $student1->branch;
        echo "<br>";
                
    ?>

</body>
</html>