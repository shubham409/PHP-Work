<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        // Rules 
        // 1. at least 1 abstract method
        // 2. Abstract method -> no body only definition
        // 3. protected and public is used for access modifier

        abstract class AbstractClass {
            public $variable ="shubham";
            public function showpublic(){
                echo "Public Method";
                echo "<br>";
            }
        }

        class AbstractImplementation extends AbstractClass {

        }
        
    ?>
        
</body>
</html>