<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="html, css">
    <meta name="author" content="Matis Russi">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>PHP</title>
</head>
<body>
    <h1>Vastused</h1>
    <?php
        # Küsi kasutajalt vajalikud parameetrid ning leia: trapetsi pindala, rombi ümbermõõt

        $k1 = $_GET['a'];
        $k2 = $_GET['b'];
        $k3 = $_GET['c'];
        $k4 = $_GET['h'];

        # Rombi külg

        $H1 = $_GET['d'];

        # Valemid

        $P = (($k1 + $k2) / 2) * $k4;
        $S = $H1 * 4;

        printf("Trapetsi pindala on %0.1f ja rombi ümbermõõt on %0.1f.", $P, $S);
    ?>
</body>
</html>