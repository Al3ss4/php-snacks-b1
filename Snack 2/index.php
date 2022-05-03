<?php

/*
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$mail = $_GET['mail'];

$age = $_GET['age'];



if(strlen($_GET['name']) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)){
    
    $notice = 'Accesso riuscito';
        
} else {
    $notice = 'Accesso negato';
}

?>


<h1>
    <?php

    echo $notice;

    ?>
</h1>