<?php

    function whileCount($first_number, $second_number){
        if($first_number <= $second_number){
            while($first_number <= $second_number ){
                echo "<span class='lead fw-bold'>".$first_number."  </span>";
    
                $first_number++;
            }
        }elseif($first_number >= $second_number){
            while($first_number >= $second_number){
                echo "<span class='lead fw-bold'>".$first_number."  </span>";
    
                $first_number--;
            }
        }
    }

?>