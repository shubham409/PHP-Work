<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php

        class Base{
            public $public_val = "public variable";
            private $private_val = "private variable";
            var $var_val = "var variable";
            protected $protected_val = "protected variable";

        }
        class DerivedClass extends Base {
            function show(){
                echo $this->public_val;
                echo "<br>";
                echo $this->var_val;
                echo "<br>";                
                echo $this->protected_val;
                echo "<br>";                
                echo $this->private_val;
                echo "<br>";


            }
        }

        class ChildDerivedClass extends DerivedClass {
            function show(){
                echo $this->public_val;
                echo "<br>";
                echo $this->var_val;
                echo "<br>";                
                echo $this->protected_val;
                echo "<br>";                
                echo $this->private_val;
                echo "<br>";


            }
        }
        $derived_object = new DerivedClass();
        $derived_object->show();

        $child_derived_object = new ChildDerivedClass();
        $child_derived_object->show();
        
        echo var_dump($derived_object);
        echo "<br>";

        echo var_dump($child_derived_object);
        echo "<br>";
    ?>
        
</body>
</html>