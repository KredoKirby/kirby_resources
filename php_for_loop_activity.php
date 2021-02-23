<?php

    for($num = 1; $num <= 50; $num++){
        if($num % 3 == 0 && $num % 5 == 0){
            echo "Fizzbuzz<br>";
        }elseif($num % 3 == 0){
            echo "Fizz<br>";
        }elseif($num % 3 == 0){
            echo "Buzz<br>";
        }else{
            echo $num."<br>";
        }
    }

?>