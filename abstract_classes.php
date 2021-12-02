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
        // 4. Don't support multiple inheritance
        // 5. Can contain data member
        // 6. static member must be complete in abstract class
        // 7. Can contain both complete and incomplete member 
        abstract class AbstractClass {
            public $variable ="shubham";
            public function showpublic(){
                echo "Public Method";
                echo "<br>";
            }
            public abstract function absmethod();
            
        }
        // concrete class rules
        // 1. must implement all method
        // 2. restiriction of access modifier must be less rectrictive or same 
        // it can not be morerestrictive like public can not be private

        class AbstractImplementation extends AbstractClass {
            public function absmethod(){
                echo "Abstract method implemented by concrete class";
                echo "<br>";
            }
        }
        $object = new AbstractImplementation();
        $object->absmethod();
        
    ?>
        
</body>
</html>