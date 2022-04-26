<?php
    /*write a php program to calculate the electrical bills using a contitional statement*/

    /*For the first 50 units - NGN. 3.50/unit
    For the next 100 units - NGN. 4.00/unit
    For the next 100 units - NGN. 5.20/unit
    For units above 250 - NGN. 6.50/unit*/

    $a = $_POST["number"] ;
    
    
    if ($a <= 50 ) {
        echo "Your rate is NGN 3.50/unit. <br/>" ;
        echo "TOTAL = "; 
        echo ($a * 3.50);
    }

    if ($a > 50) {
        while ($a <= 150) {
            echo "Your rate is NGN 4.00/unit. <br/>" ;
            echo "TOTAL = " ;
            echo ($a * 4.00);
        
            break;
        }
            
    }
?>
<?php

    $a = $_POST["number"];
    if ($a > 150) {
        while ($a <= 250) {
            echo "Your rate is NGN 5.20/unit. <br/>";    
            echo "TOTAL = " ;
            echo ($a * 5.20);
            break;
        }
          
        
    }

    if ($a > 250) {
        echo "Your rate is NGN 6.50/unit. <br/>" ;
        echo "TOTAL = " ;
        echo ($a * 6.50);
    }

    
?>