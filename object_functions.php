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
            var $number;

            // creating constructors
            function __construct($name , $roll , $number){
                $this->name = $name;
                $this->roll = $roll;
                $this->number = $number;
                echo "Constructor is called";
                echo "<br>";
            }
            function above_average(){
                if($this->number >80){
                    echo "Congrats you are above average";
                    echo "<br>";
                }
                else{
                    echo "Good work";
                    echo "<br>";
                }
            }


        }
        // object
        // assgning student
        $student1 = new Student("shubham",409,90);
         
        $student1->name = "Shubham Mishra";
        // using object
        echo $student1->name;
        echo "<br>";
        echo $student1->roll;
        echo "<br>";
        echo $student1->above_average();
        echo "<br>";
          
        $student2 = new Student("Jhon doe",500,70);
                 // using object
        echo $student2->name;
        echo "<br>";
        echo $student2->roll;
        echo "<br>";
        echo $student2->above_average();
        echo "<br>";        

    ?>

</body>
</html>