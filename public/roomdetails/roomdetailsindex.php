<?php
include "../student/student_authentication.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Document
    </title>
    <style>
        .hostel{
            text-align: center;
        }
        .image{
            display: block;
            width: 680px;
            height: 360px;
        }
    </style>
</head>
<body style="background-color: lightblue">
<div class="container">
    <?php
    include "../includes/mainnav.php";
    ?>
    <div class="col-sm-2 col-md-2">
        <?php
        include "../includes/roomsidenav.php"
        ?>

    </div>

    <div class="col-sm-10 col-lg-8">

        <div class="hostel">
            <h1 class="Styling">ROOMS AVAILABLE </h1>
        </div>
        <img class="image" src="../assets/images/room.jpg">


        </div>
    </div>
</body>
</html>