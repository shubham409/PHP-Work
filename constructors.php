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

            // creating constructors
            function __construct(){
                echo "Constructor is called";
                echo "<br>";
            }


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
          

        // object
        $student2 = new Student;
        // assgning student 
        $student2->name = "Another";
        $student2->roll = 500;
        $student2->branch = "ECE";
        
        // using object
        echo $student2->name;
        echo "<br>";
        echo $student2->roll;
        echo "<br>";
        echo $student2->branch;
        echo "<br>";
    ?>

</body>
</html>