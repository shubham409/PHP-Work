<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        // Rules 
        // 1. All methods must be public
        // 2. only mthods are allowed not variables
        // 3. all methods are abstract but keywords are not necessary
        // 4. classes implement interface 
        interface Demointerface {
            function absmethod();
        }
        // concrete class rules
        // 1. 
        // 2. restiriction of access modifier must be less rectrictive or same 
        // it can not be morerestrictive like public can not be private

        class AbstractImplementation implements Demointerface {
            public function absmethod(){
                echo "Interface method implemented by concrete class";
                echo "<br>";
            }
        }
        $object = new AbstractImplementation();
        $object->absmethod();
        
    ?>
        
</body>
</html>