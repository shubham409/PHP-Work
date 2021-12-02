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
            function __construct($name , $roll , $branch){
                $this->name = $name;
                $this->roll = $roll;
                $this->branch = $branch;
                echo "Constructor is called";
                echo "<br>";
            }


        }
        // object
        // assgning student
        $student1 = new Student("shubham",409,"CSE");
         
        $student1->name = "Shubham Mishra";
        // using object
        echo $student1->name;
        echo "<br>";
        echo $student1->roll;
        echo "<br>";
        echo $student1->branch;
        echo "<br>";
          
        // object
        // assgning student
        $student2 = new Student("Unknown",401,"Unknown");
         
        $student2->name = "JK";
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