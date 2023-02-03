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

    <title>PHP 02</title>
</head>
<body>
    <h1>Harjutus 02</h1>
    <?php
        # Matis Russi 24.01.2023

        # Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse, korrutatakse, jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel näidatakse ka tehet ja kuvatakse eraldi ridadel.
        
        $x = 42;
        $y = 356;
        $liitm = $x + $y;
        $lahut = $x - $y;
        $korru = $x * $y;
        $jagam = $x / $y;
        $jaak = $x % $y;

        echo "Vastused<br><br>";
        echo "Liitmine: $x + $y = $liitm<br>";
        echo "Lahutamine: $x - $y = $lahut<br>";
        echo "Korrutamine: $x * $y = $korru<br>";
        echo "Jagamine: $x / $y = $jagam<br>";
        echo "Jääk: $x % $y = $jaak<br><br>";

        # Koosta kood, mis teisendab millimeetrid (mm) sentimeetriteks (cm) ja meetriteks (m). Vastus vormindatakse 2 kohta pärast koma.

        $mm = 4729;
        $cm = $mm / 10;
        $m = $cm / 100;

        echo "Millimeetrid: $mm mm<br>";
        printf("Sentimeetrid: %0.2f cm<br>", $cm);
        printf("Meetrid: %0.2f m<br><br>", $m);

        # Leia täisnurkse kolmnurga ümbermõõt ja pindala. Vastused ümardada täisarvuni ja täislausega palun.

        $a = 4;
        $h = 8;
        $c = 13;

        $P = $a * $h;
        $S = $a + $h + $c;

        echo "Ümbermõõt: $S ühikut<br>";
        echo "Pindala: $P ühikut";
    ?>
</body>
</html>