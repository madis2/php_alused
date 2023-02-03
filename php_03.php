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

    <title>PHP 03</title>
</head>
<body>
    <h1>Harjutus 03</h1>

    <h3>Trapets</h3>

    <form action="vastused.php" method="get">
        Külg 1 <input class="mt-1" type="number" name = "a"><br>
        Külg 2 <input class="mt-1" type="number" name = "b"><br>
        Külg 3 <input class="mt-1" type="number" name = "c"><br>
        Kõrgus <input class="mt-1" type="number" name = "h"><br>

        Rombi külje pikkus <input class="mt-4" type="number" name = "d"><br>
        <input class="mt-1" type="submit" value="Saada">
    </form>
</body>
</html>