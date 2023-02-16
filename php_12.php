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

    <title>PHP 12</title>
</head>
<body>
    <div class="container">

        <h1>Sõiduaeg</h1>

        <form action="" method="get">
            Sõidu algus (hh:mm) <input type="text" name="t1"><br>
            Sõidu lõpp (hh:mm) <input type="text" name="t2"><br>
            <input type="submit" value="Saada">
        </form>

        <?php
            if (!empty($_GET["t1"]) && isset($_GET['t2'])) {
                $t1 = $_GET['t1'];
                $t2 = $_GET['t2'];

                if (strlen($t1) >= 5 && strlen($t2) >= 5) {
                    $alg = new DateTime($t1);
                    $lopp = new DateTime($t2);
                    $erinev = $lopp->diff($alg);

                    $tund= $erinev->h;
                    $minut = $erinev->i;

                    echo "Sõiduaeg on: $tund tundi ja $minut minutit";
                } else {
                    echo "Sisestatud ajad peavad olema vÃ¤hemalt viis sümbolit pikad.";
                }
            }
        ?>

        <h1>Palkade võrdlus</h1>

        <?php
            $allikas = 'tootajad.csv';
            $minu_csv = fopen($allikas, 'r') or die('Ei saanud faili avada!');

            $header = fgetcsv($minu_csv, filesize($allikas),';');

            $mpalk = [];
            $fpalk = [];

            while (!feof($minu_csv)) {
                $row = fgetcsv($minu_csv, filesize($allikas),';');
                if (is_array($row) && $row[1] == 'm') {
            array_push($mpalk, $row[2]);
                } elseif (is_array($row) && $row[1] == 'n') {
                    array_push($fpalk, $row[2]);
                }
            }

            fclose($minu_csv);

            $mkesk = array_sum($mpalk) / count($mpalk);
            $fkesk = array_sum($fpalk) / count($fpalk);

            $msuurim = max($mpalk);
            $fsuurim = max($fpalk);

            echo 'Mehe keskmine palk: '.$mkesk.'<br>';
            echo 'Naise keskmine palk: '.$fkesk.'<br><br>';
            echo 'Mehe suurim palk: '.$msuurim.'<br>';
            echo 'Naise suurim palk: '.$fsuurim.'<br>';
        ?>
    </div>
</body>
</html>