<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        $male = TRUE;
        $tall = FALSE;
        if($male or $tall){
            if($male and $tall){
                echo "You are Male and Tall";
                echo "<br>";
            }
            elseif($male){
                echo "You are Male";
                echo "<br>";
            }
            else{
                echo "You are Tall";
                echo "<br>";
            }
            
        }
        else{
            echo "You Are Neither Male Nor Tall";
            echo "<br>";
        }

    ?>
</body>
</html>