<?php

/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$randomNumbers = [];

    while (count($randomNumbers) < 15) {
        $number = rand(1, 100);

        if (!in_array($number, $randomNumbers)){
            $randomNumbers[] = $number;
        }
    }
    echo '<pre>';
    '<li>' . var_dump($randomNumbers) . '</li>';
    echo '</pre>';

?>

