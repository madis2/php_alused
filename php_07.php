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

    <title>PHP 7</title>
</head>
<body>
    <div class="container">
        <h1 class = "mt-2">Harjutus 07</h1>

        <h3 class = "mt-4">Tervitus</h3>
        <?php
            function Tere(){
                return "Hommik mario!";
            }
            
            echo Tere();
        ?>

        <h3 class = "mt-4">Liitu uudiskirjaga</h3>

        

        <?php
            function uudis(){
                echo '<h4 class = "mt-4"> Ühine Bootstrap uudiskirjaga!</h4>';

                echo '<form action="">
                Sisesta gmail <input class="mt-1">
                <input class="mt-1" type="submit" value="Saada">
                </form>'; 
            }

            echo uudis();
        ?>

        
        <h3 class = "mt-4">Kasutajanimi ja email</h3>

        <form action="">
            Sisesta kasutajanimi <input class="mt-1" name = "kasut">
            <input class="mt-1" type="submit" value="Saada">
        </form>
        <?php
            function kasutaja(){
                if(isset($_GET['kasut'])){
                    $user = strtolower($_GET['kasut']);

                    $mail = strtolower($_GET['kasut']);
                    $mail .= '@hkhk.edu.ee';


                    $dada = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                    $dadada = strlen($dada);
                    $kood = '';

                    for ($i = 0; $i < 7; $i++) {
                        $kood .= $dada[rand(0, $dadada - 1)];
                    }

                    echo 'Kasutaja nimi: '.$user.'<br>';
                    echo 'Kasutajale loodud mail: '.$mail.'<br>';
                    echo 'Kasutajale loodud suvaline kood: '.$kood.'<br>';
                }
            }

            if(isset($_GET['kasut'])){
                echo kasutaja();
            }
        ?>

        <h3 class = "mt-4">Arvud</h3>

        <form action="">
            Sisesta vahemik | min: -100 | max: 100 <br><input class="mt-1" name = "esimene">
            <input class="mt-1" min = -100 name = "teine"><br><br>
            Sisesta sammupikkus<br><input type = "number" class = "mt-1" name = "samm">
            <input class="mt-1" max = 100 type="submit" name = "nupp" value="Saada"><br><br>
        </form>

        <?php
            function arvud(){
                if(isset($_GET['esimene']) && isset($_GET['teine'])){
                    $esimene = $_GET['esimene'];
                    $teine = $_GET['teine'];
                    $samm = $_GET['samm'];

                    if(isset($_GET['samm'])){
                        for($nr = $esimene; $nr <= $teine; $nr ++){
                            if($nr % $samm == 0){
                                echo $nr.' ';
                            }
                        }
                    }
                }
            }

            if(isset($_GET['nupp'])){
                echo arvud();
            }
        ?>

        <h3 class = "mt-4">Ristküliku pindala</h3>
        
        <form action="">
            Sisesta 2 arvu <br><input class="mt-1" name = "arv1">
            <input class="mt-1" name = "arv2">
            <input class="mt-1" type="submit" name = "nupp2" value="Saada"><br><br>
        </form>

        <?php
            function pindala(){
                if(isset($_GET['arv1']) && isset($_GET['arv2'])){
                    $arv1 = $_GET['arv1'];
                    $arv2 = $_GET['arv2'];

                    $pind = $arv1 * $arv2;
                    echo 'Pindala on '.$pind.' ühikut';
                }
            }

            if(isset($_GET['nupp2'])){
                echo pindala();
            }
        ?>

        <h3 class = "mt-4">Isikukood</h3>
        <form action="">
            Sisesta isikukood <br><input class="mt-1" name = "isik">
            <input class="mt-1" type="submit" name = "nupp3" value="Saada"><br><br>
        </form>

        <?php
            function isikukood(){
                if(isset($_GET['isik'])){
                    $isik = $_GET['isik'];

                    if(strlen($isik) == 11){
                        echo 'Isikukood on õige pikkusega. ';

                        if($isik[0] == 3){
                            echo 'Isik on mees sündinud aastal 19'.$isik[1].$isik[2].'.<br>';
                        } else if($isik[0] == 4){
                            echo 'Isik on naine sündinud aastal 19'.$isik[1].$isik[2].'.<br>';
                        } else if($isik[0] == 5){
                            echo 'Isik on mees sündinud aastal 20'.$isik[1].$isik[2].'.<br>';
                        } else if($isik[0] == 6){
                            echo 'Isik on naine sündinud aastal 20'.$isik[1].$isik[2].'.<br>';
                        } else if($isik[0] == 7){
                            echo 'Isik on mees sündinud aastal 21'.$isik[1].$isik[2].'.<br>';
                        } else if($isik[0] == 8){
                            echo 'Isik on naine sündinud aastal 21'.$isik[1].$isik[2].'.<br>';
                        }
                        
                    } else {
                        echo 'Isikukood ei ole õige.';
                    }
                }
            }

            if(isset($_GET['nupp3'])){
                echo isikukood();
            }
        ?>

        <h3 class = "mt-4">Head mõtted</h3>

        <?php
            
        ?>
    </div>
</body>
</html>