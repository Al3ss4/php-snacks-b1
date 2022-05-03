<?php

/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/


$teams = [
    [
        'squadraCasa' => 'Olimpia Milano',
        'squadraOspite' => 'Pallacanestro Trieste 2004',
        'puntiCasa' => '95',
        'puntiOspite' => '80',
    ],
    [
        'squadraCasa' => 'Dinamo Sassari',
        'squadraOspite' => 'Derthona Basket',
        'puntiCasa' => '81',
        'puntiOspite' => '90',
    ],
    [
        'squadraCasa' => 'Victoria Libertas',
        'squadraOspite' => 'Dolomiti Energia',
        'puntiCasa' => '77',
        'puntiOspite' => '78',
    ],
    [
        'squadraCasa' => 'Pallacanestro Brescia',
        'squadraOspite' => 'Napoli Basket',
        'puntiCasa' => '98',
        'puntiOspite' => '93',
    ],
    [
        'squadraCasa' => 'NBB',
        'squadraOspite' => 'Varese Pallacanestro',
        'puntiCasa' => '102',
        'puntiOspite' => '99',
    ],
    [
        'squadraCasa' => 'Vanoli Basket Cremona',
        'squadraOspite' => 'Venezia Reyer',
        'puntiCasa' => '100',
        'puntiOspite' => '78',
    ],
];

$arrayLenght= count($teams);

?>


<h1>Risultati dell'ultima giornata:</h1>

<ul>
    <?php for($i = 0; $i < $arrayLenght; $i++) { ?>

        <li>
            <?php 
               echo $teams[$i]['squadraCasa'] . ' - ' . $teams[$i]['squadraOspite'] . ' | ' . $teams[$i]['puntiCasa'] . ' - ' . $teams[$i]['puntiOspite']
            ?>
        </li>


    <?php } ?>

</ul>