<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="html, css">
    <meta name="author" content="Matis Russi">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <title>PHP 01</title>
</head>
<body>
    <h1>Harjutus 01</h1>
    <?php
        
        # Iga ülesanne algab kommentaariga, kus on kirjas ülesande number, sinu nimi ja kuupäev

        # Matis Russi 24.01.2023

        # Programm väljastab kolme muutuja (nimi, sünniaasta, tähtkuju) väärtused ühe koodireaga. Kusjuures kõik on väljastades eraldi real. Vastus täislausega.

        $enimi = 'Karin';
        $pnimi = "Eegreid";
        $nimi = $enimi.' '.$pnimi;
        $aasta = 2003;
        $tahtkuju = "jäär";

        echo "Nimeks on $nimi.<br>Sünniaasta on $aasta.<br>Tähtkuju on $tahtkuju.<br><br>";

        # Väljasta järgnev lause: “It’s My Life” – Dr. Alban

        echo "\"It's my life\" - Dr.Albon<br><br>";

        # “Joonista” järgmine pilt

        echo '(\(\<br>( -.-)<br>o_(")(")'
    ?>
</body>
</html>