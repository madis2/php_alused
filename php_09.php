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

    <title>PHP 09</title>
</head>
<body>
    <div class="container">
        <h1>Harjutus 9</h1>
        
        <h3>Vorminda nimi</h3>
        <form action="">
            Sisesta nimi <br><input class="mt-1" name = "nimi">
            <input class="mt-1" type="submit" name = "nupp0" value="Saada"><br><br>
        </form>

        <?php
            function nimi(){
                if(isset($_GET['nimi'])){
                    $isik = ucfirst(strtolower(($_GET['nimi'])));
                    echo 'Tere, '.$isik.'!';
                }
            }

            if(isset($_GET['nupp0'])){
                echo nimi();
            }
        ?>
        
        <h3>Tükelda tekst ja pane punktid vahele</h3>

        <form action="">
            Sisesta tekst <br><input class="mt-1" name = "lamp">
            <input class="mt-1" type="submit" name = "nupp1" value="Saada"><br><br>
        </form>

        <?php
            function tykeld(){
                if(isset($_GET['lamp'])){
                    $suv = $_GET['lamp'];
                    $pikk = strlen($suv);
                    for ($i = 0; $i < $pikk; $i++){
                        echo strtoupper($suv[$i]).'.';
                    }
                }
            }

            if(isset($_GET['nupp1'])){
                echo tykeld();
            }
        ?>

        <h3>Asenda ropud sõnad</h3>

        <form action="">
            Sisesta tekst <br><input class="mt-1" name = "text">
            <input class="mt-1" type="submit" name = "nupp2" value="Saada"><br><br>
        </form>

        <?php
            function asenda(){
                if(isset($_GET['text'])){
                    $teks = $_GET['text'];
                     
                    $otsi = array("asshole", "fuck", "dick", "bitch", "idiot", "pask", "lollakas", "nahhui", "jobu", "kurat", "noob", "retard", "retakas", "dickhead", "wanker", "prick", "shithead", "fucker", "motherfucker", "persse", "molu", "saast", "rämps", "rsk", "vitt", "persevest", "sittapea", "idioot", "teomees", "soperdis", "tõprake", "lambaaju", "nänn", "tuim", "sitt", "soperdaja", "lumehelbeke", "läbustaja", "suurpea", "bastard", "cock", "cunt", "douchebag", "dumbass", "fag", "fuckwit", "knobhead", "muppet", "prat", "twat", "wankstain", "dipshit", "numbskull", "putz", "schmuck", "thundercunt", "dickwad", "asshat", "shitbag", "bellend", "cumstain", "maggot", "minger", "scumbag", "skank", "tosser", "wanker", "asswipe", "clown", "gimp", "jackass", "moron", "peckerhead", "plonker", "turd", "fucktard", "gutter slut", "jerkoff", "shit-for-brains", "cockwomble", "arsehole", "dickface", "pisshead", "pricktease", "twunt", "bugger", "dogfucker", "douchenozzle", "fuckbucket", "shitgibbon", "snollygoster", "wankmaggot");
                    
                    $asend = '*****';

                    echo str_replace($otsi, $asend, $teks);
                }
            }

            if(isset($_GET['nupp2'])){
                echo asenda();
            }
        ?>

        <h3>Nimi mailiks</h3>

        <form action="">
            Sisesta ees- ja perenimi <br><input class="mt-1" name = "ees"><input class="mt-1" name = "pere">
            <input class="mt-1" type="submit" name = "nupp3" value="Saada"><br><br>
        </form>

        <?php
            function muuda(){
                if(isset($_GET['ees']) && isset($_GET['pere'])){
                    $ees = $_GET['ees'];
                    $pere = $_GET['pere'];
                    
                    $asenda = array('a','y','o','o','a','y','o','o');
                    $otsit = array('ä','ü','ö','õ','Ä','Ü','Ö','Õ');

                    echo strtolower(str_replace($otsit, $asenda, $ees)).'.'.strtolower(str_replace($otsit, $asenda, $pere)).'@hkhk.edu.ee';
                 }
            }

            if(isset($_GET['nupp3'])){
                echo muuda();
            }
        ?>

    </div>
</body>
</html>