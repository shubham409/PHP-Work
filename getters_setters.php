<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

    <?php
        class Movie{
            private $name;
            private $ratings;
            private $ticketPrice;

            function __construct($name,$ratings,$ticketPrice){
                $this->name=$name;
                $this->ratings=$ratings;
                $this->ticketPrice=$ticketPrice;
            }
            function setRating($rating){
                // forcing it to be numeric no text no float
                if(gettype($rating)=="integer")
                {
                    if($rating >5){
                        $this->ratings = $rating;
                        return;
                    }
                    echo "Rating is very low";
                    echo "<br>";                    
                }
                else{
                    echo "Please enter Integer value";
                    echo "<br>";
                }
            }
            function setName($name){
                $this->name= $name;
            }
            function setTicketPrice($ticketPrice){
                $this->ticketPrice = $ticketPrice;
            }
            
            function getRating(){
                return $this->ratings ;
            }
            function getName(){
                return $this->name;
            }
            function getTicketPrice(){
                return $this->ticketPrice ;
            }        

        }

        $movie1 = new Movie("Bahubali" , 9.5 , 500);
        echo $movie1->getRating();
        echo "<br>";
        echo $movie1->getTicketPrice();
        echo "<br>";
        echo $movie1->getName();
        echo "<br>";

        echo $movie1->setRating(6);
        echo "<br>";        
            

    ?>

</body>
</html>