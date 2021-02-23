<?php

    function displayGreeting($first_name, $last_name, $country){
        echo "Hello, $first_name $last_name <br>";
        echo "You are from $country <br><br>";
    }

    displayGreeting("John", "Doe", "USA");
    displayGreeting("Hayao", "Miyazaki", "Japan");
?>

