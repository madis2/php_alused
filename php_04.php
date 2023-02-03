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

    <title>PHP 4</title>
</head>
<body>
    <div class="container">  
        <h1>Harjutus 4</h1>

        <h3 class="mt-4">Jagamine</h3>

        <form action="php_04.php" method="get">
            Täisarv 1 <input class="mt-1" type="number" name = "a"><br>
            Täisarv 2 <input class="mt-1" type="number" name = "b"><br>
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['a']) && isset($_GET['b'])){
                $arv1 = $_GET['a'];
                $arv2 = $_GET['b'];

                if($arv2 == 0){
                    echo "Nulliga ei saa jagada!";
                } else {
                    $jaga = $arv1 / $arv2;

                    echo "Vastus: $jaga"; 
                }     
            }
        ?>

        <h3 class="mt-4">Vanus</h3>

        <form action="php_04.php" method="get">
            Kasutaja 1 vanus <input class="mt-1" type="number" name = "v1"><br>
            Kasutaja 2 vanus <input class="mt-1" type="number" name = "v2"><br>
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['v1']) && isset($_GET['v2'])){
                $van1 = $_GET['v1'];
                $van2 = $_GET['v2'];

                if($van1 == $van2){
                    echo "Kasutajad on sama vanad.";
                } else if($van1 > $van2){
                    echo "Kasutaja 1 on vanem kui kasutaja 2."; 
                } else {
                    echo "Kasutaja 2 on vanem kui kasutaja 1.";
                } 
            }
        ?>

        <h3 class="mt-4">Ristkülik või ruut</h3>
        
        <form action="php_04.php" method="get">
            Külg 1 <input class="mt-1" type="number" name = "x"><br>
            Külg 2 <input class="mt-1" type="number" name = "y"><br>
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['x']) && isset($_GET['y'])){
                $kulg1 = $_GET['x'];
                $kulg2 = $_GET['y'];

                if($kulg1 == $kulg2){
                    echo "Ruut!";
                } else {
                    echo "Ristkülik!"; 
                }     
            }      
        ?>

        <h3 class="mt-4">Ristkülik või ruut II</h3>
        <p>Vastavalt eelmise harjutuse vastusele kuvatakse siia ruut või ristkülik.</p>
     

        <?php
            if(isset($_GET['x']) && isset($_GET['y'])){
                $kulg1 = $_GET['x'];
                $kulg2 = $_GET['y'];

                if($kulg1 == $kulg2){
                    $v = 'ruut';
                } else {
                    $v = 'ristkulik';
                }
                echo "<img src=\"$v.jpg\" alt=\"\">";
            }          
        ?>

        <h3 class="mt-4">Juubel</h3>
        
        <form action="php_04.php" method="get">
            Sisesta sünniaasta <input class="mt-1" type="number" name = "synn">
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['synn'])){
                $junn = $_GET['synn'];
                
                $aasta = date("Y");
                $vanus = $aasta - $junn;

                $juubel = $vanus % 5;
                
                if($juubel == 0){
                    echo "Kasutajal on juubel see aasta.";
                } else {
                    echo "Kasutajal ei ole juubel see aasta.";
                }
            }   
        ?>

        <h3 class="mt-4">Hinne</h3>

        <form action="php_04.php" method="get">
            Sisesta punktid 0-10 <input class="mt-1" type="number" max= 10 min = 1 name = "punkt">
            <input class="mt-1" type="submit" value="Saada">
        </form>

        <?php
            if(isset($_GET['punkt'])){
                $punktid = $_GET['punkt'];

                switch($punktid){
                    case($punktid == 10): echo "SUPER!";
                    break;

                    case($punktid < 10 && $punktid >= 5): echo "TEHTUD!";
                    break;

                    case($punktid < 5): echo "KASIN!";
                    break;

                    default: echo "KASIN!";
                }
            }

        ?>
    </div>
</body>
</html>