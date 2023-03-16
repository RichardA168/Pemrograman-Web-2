<?php
    $C = 37.841; //Celcius
    $F = round($C * 9/5 + 32, 4); //Celcius to Fahrenheit
    $R = round($C * 4/5, 4); //Celcius to Reamur
    $K = round($C + 273.15, 4); //Celcius to Kelvin
    echo "Fahrenheit (F) = $F <br>";
    echo "Reamur (R) = $R <br>";
    echo "Kelvin (K) = $K";
?>
