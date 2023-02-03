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

    <title>PHP 6</title>
</head>
<body>
    <div class="container">
        <h1>Harjutus 06</h1>
        
        <h3 class = "mt-4">Genereeri</h3>
        <?php
            for($nr = 1; $nr <= 100; $nr ++){
                echo $nr.'. ';
                if($nr % 10 == 0){
                    echo "<br>";
                }
            }
        ?>

        <h3 class = "mt-4">Rida</h3>

        <?php
            for($rida = 1; $rida <= 10; $rida ++){ 
                echo '*'; 
               }
        ?>

        <h3 class = "mt-4">Rida II</h3>

        <?php
            for($rida = 1; $rida <= 7; $rida ++){ 
                echo '*<br>';
            }
        ?>

        <h3 class = "mt-4">Ruut</h3>

        <form action="">
            Sisesta rida <input class="mt-1" name = "rida">
            Sisesta veerg <input class="mt-1" name = "veerg">
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['rida']) && isset($_GET['veerg'])){
                $rida1 = $_GET['rida'];
                $veerg1 = $_GET['veerg'];

                for($rida=1; $rida <= $rida1; $rida++){ 
                    for($veerg=1; $veerg <= $veerg1; $veerg++){ 
                            echo '* ';	
                        }
                    echo '<br>';
                }
            }
        ?>

        <h3 class = "mt-4">Kahanev</h3>

        <?php
            for($nr = 10; $nr >= 1; $nr--){
                echo $nr. ' ';
            }
        ?>

        <h3 class = "mt-4">Kolmega jagunevad</h3>

        <?php
            for($nr = 1; $nr <= 100; $nr ++){
                if($nr % 3 == 0){
                    echo $nr.' ';
                }
            }
        ?>

        <h3 class = "mt-4">Massiivid ja tsüklid</h3>

        <?php
            $tydr = array('kati','pille','malle','piret');
            $pois = array('martin','robin','kalle','oleg');
           
            $kokku = count($pois) + count($tydr);

            for ($i = 0; $i < $kokku; $i++) {
                if ($i % 2 == 0) {
                    echo $pois[$i / 2] . "<br>";
                } else {
                    echo $tydr[($i - 1) / 2] . "<br>";
                }
            }
        ?>
    </div>
</body>
</html>