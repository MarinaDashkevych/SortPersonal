<?php
require_once 'list.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Учителя</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">



</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php"><b>Главная</b></a>
            <ul class="nav justify-content-center">
                <li class="nav-item active">
                <li class="nav-item">
                    <a class="nav-link" href="teacher.php">Преподаватели</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php" tabindex="-1" aria-disabled="true">Администраторы</a>
                </li>
                <a class="nav-link" href="students.php">Студенты</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<br>

<div class="container">
    <h2>Все данные</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="row">#</th>
            <th>name</td>
            <th>group</td>
            <th>email</td>
            <th>age</td>
            <th>phone</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($vse as $key => $vs)
        if ($vs['group'] == 'teacher'): ?>
            <tr>
                <th scope="row"><?= ++$key ?></th>
                <td><?php echo $vs['name'] ?></td>
                <td><?= $vs['group'] ?></td>
                <td><?= $vs['email'] ?></td>
                <td><?= $vs['age']  ?></td>
                <td><?= $vs['phone'] ?></td>
            </tr>
        <?php endif ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="page-footer font-small indigo">

    <div class="container">

        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#">Про  нас</a>
                </h6>
            </div>

            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#">Помощь</a>
                </h6>
            </div>

            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#">Мы в  соцсетях</a>
                </h6>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Наша школа </a>
        </div>
</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<script src="js/main.js"></script>
