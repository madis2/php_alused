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

    <title>PHP 08</title>
</head>
<body>
    <div class="container">
        <h1>Harjutus 08</h1>

        <h3 class = "mt-4">Kuupäev ja kellaaeg</h3>

        <?php
            echo date('d.m.Y');
        ?>

        <h3 class = "mt-4">Leia vanus</h3>

        <form action="#" method="get">
            Sisesta sünniaasta <input class="mt-1" type="number" name = "synn">
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['synn'])){
                $junn = $_GET['synn'];
                
                $aasta = date("Y");
                $vanus = $aasta - $junn;
                
                echo 'Kasutaja saab '.$vanus.' aastaseks.';
            }   
        ?>

        <h3 class = "mt-4">Mitu päeva käesoleva kooliaasta lõpuni?</h3>

        <?php
            $cdate = mktime(0, 0, 0, 6, 18, 2023);
            $today = time();
            $difference = $cdate - $today;

            if ($difference < 0) { $difference = 0; }
            echo floor($difference/60/60/24)." päeva jäänud 2022/23 kooliaasta lõpuni.";
        ?>
    
        <h3 class = "mt-4">Aastaaja pilt</h3>

        <?php

            $kuu = date('n'); 
            $aeg = '';

            if ($kuu >= 3 && $kuu <= 5) {
            $aeg = 'kevad';
            } elseif ($kuu >= 6 && $kuu <= 8) {
            $aeg = 'suvi';
            } elseif ($kuu >= 9 && $kuu <= 11) {
            $aeg = 'sügis';
            } else {
            $aeg = 'talv';
            }

            if ($aeg == 'kevad') {
            echo '<img src="kevad.jpg" alt="Kevad">';
            } elseif ($aeg == 'suvi') {
            echo '<img src="suvi.png" alt="Suvi">';
            } elseif ($aeg == 'sügis') {
            echo '<img src="sygis.jpg" alt="Sügis">';
            } else {
            echo '<img src="talv.jpg" alt="Talv">';
            }
        ?>
    </div>
</body>
</html>
