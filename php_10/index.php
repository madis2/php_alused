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

    <title>PHP</title>
</head>

<body>
    <a href="index.php">Avaleht</a>
    <a href="teenused.php"leht=teenused>Teenused</a>
    <a href="meist.php"leht=meist>Meist</a>
    <a href="teenused.php"leht=kontakt>Kontakt</a>

    <?php
        if (!empty($_GET['leht'])){
            $leht = htmlspecialchars($_GET['leht']);
            $lubatud = array('portfoolio','kaart','kontakt');
            $kontroll = in_array($leht, $lubatud);
        if($kontroll==true){
            include($leht.'.php');
        } else {
            echo 'Valitud lehte ei eksisteeri!';
        }
        } else {

        ?>

        <h2>Avaleht</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, praesentium quae nesciunt ipsum fuga dignissimos reiciendis distinctio commodi voluptates autem suscipit hic eius eum architecto eos amet quibusdam, molestias provident? Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ex sed fugiat dignissimos eligendi odio harum, non, minima perspiciatis incidunt fugit, odit amet explicabo inventore quaerat ratione ullam temporibus quisquam?</p>
    <?php
    }
?>  
</body>