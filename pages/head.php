<!DOCTYPE html>
<html lang=<?php echo $lang; ?>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if ($lang=='en') {
        echo '<title>Hotel "Marmaris Hotel SPA"</title>';
    } else if ($lang=='ru') {
        echo '<title>Отель "Marmaris Hotel SPA"</title>';
    } else {
        echo '<title>"Marmaris Hotel SPA" mehmonhonasi</title>';
    }
    ?>

        <!-- Bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!--        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">-->
<!--        <script src="../plugins/bootstrap/bootstrap.min.js"></script>-->
        <!-- Css styles link -->
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/shared.css">
        <link rel="stylesheet" href="../css/media.css">
        <link rel="shortcut icon" href="../img/logo100.png" type="image/x-icon">
        <!-- Font Awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--        <link rel="stylesheet" href="plugins/awesome/all.min.css">-->
        <!-- JS files link -->
        <script src="../JS/script.js"></script>
        <script src="../JS/request.js"></script>
        <!-- Bootstrap JS link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!--        <script src="plugins/bootstrap/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>-->
    </head>