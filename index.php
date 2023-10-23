<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


    //1.funzioni sui numeri (min = voto più basso) (max = voto più alto)
    $voti = [26,24,30,21,19];
    $minore = min($voti);

    echo $minore;


    //1.2stringhe
    $nome = "Andrea";

    echo "Ciao da $nome";


    //2.funzioni su stringhe
    echo 2, "Php approfondimento", 3;
    //2.1 explode e implode (explode trasforma stringa in array, implode un array in stringa)
    $user = "Andrea Ferrini programmatore";
    $arr = explode(" ", $user);
    var_dump($arr);

    $user = "Andrea Ferrini programmatore";
    $arr = explode(" ", $user);
    echo implode(" ", $arr);

    //2.2 addslashes (aggiunge slash alle stringhe - spesso utilizzata nei database)
    $user = "Andrea D' Onofrio";
    echo addslashes($user);

    //2.3 str_contains (per sapere se all' interno di una stringa ci sono sottostringhe e risponderà in booleano quindi true o false)
    var_dump(str_contains("Php approfondimento","o ripasso"));

    //2.4 strtolower, strtoupper (trasforma la stringa tutta in minuscolo o tutta in maiuscolo)
    $str = "questo è un approfondimento su PHP";
    echo strtoupper($str); //con mb_strtoupper anche la è diventerà in caps lock


    //3.booleani
    $isAdmin = true;

    if($isAdmin === true) {
        echo "sei autorizzato all' accesso";
    } else {
        echo "non sei autorizzato";
    }

?>

</body>
</html>
    

