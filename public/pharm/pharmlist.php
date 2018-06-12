<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/list.css">
    <link rel="stylesheet"  href="../assets/css/bootstrap.css">
    <script src="assets/bootstrap.js"></script>
</head>



<html>
<head>
    <title>
        p list
    </title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>

<body>
<div class="container">

<?php
include "../includes/pharmnav.php";
?>
<div class="main-contents">
<div class="list-holder">
    <div class="title-holder">
        <div class="row-title-small">Id</div>
        <div class="row-title">name</div>
        <div class="row-title">age</div>
        <div class="row-title">gender</div>
        <div class="row-title-big">Administer Drugs</div>
    </div>

    <div class="columns-holder">

        <?php
         include "../../private/connection.php";
        $sql = "SELECT * FROM `patients_reg` INNER JOIN `daily_patients_interactions`
         ON `patients_reg`.`id` = `daily_patients_interactions`.`patients_id` WHERE `daily_patients_interactions`.`pharm` = 1";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="column-small"><?php echo $row['id'] ?></div>
            <div class="column"><?php echo $row['name'] ?></div>
            <div class="column"><?php echo $row['age'] ?></div>
            <div class="column"><?php echo $row['gender'] ?></div>
            <div class="column-big">
                <a href="pharmacy.php?id=<?php echo $row['id'] ?>">
                    <button class="button-wide">administer drugs</button></a>
            </div>
            <br>
            <hr>
            <?php
        }
        ?>
    </div>
</div>
    <?php
    include "../includes/footer.php";
    ?>
</div>
</body>

</html>