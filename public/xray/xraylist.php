<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/list.css">
    <link rel="stylesheet"  href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <script src="assets/bootstrap.js"></script>

</head>
<body>
<div class="container">
<?php
include "../includes/xraynav.php";
?>
<div class="main-contents">
<div class="list-holder">
    <div class="title-holder">
        <div class="row-title-small">Id</div>
        <div class="row-title">name</div>
        <div class="row-title">gender</div>
        <div class="row-title-big">Attend to Patients</div>
    </div>

    <div class="columns-holder">

        <?php
        include "../../private/connection.php";
        $sql = "SELECT * FROM `patients_reg` INNER JOIN `daily_patients_interactions`
         ON `patients_reg`.`id` = `daily_patients_interactions`.`patients_id` WHERE `daily_patients_interactions`.`xray` = 1";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="column-small"><?php echo $row['id'] ?></div>
            <div class="column"><?php echo $row['name'] ?></div>
            <div class="column"><?php echo $row['gender'] ?></div>
            <div class="column-big">
                <a href="../xray/xray.php?patient_id=<?php echo $row['patients_id'] ?>">
                    <button>Attend to Patients</button></a>
            </div>
            <br>
            <hr>
            <?php
        }
        ?>
    </div>
</div>
</div>
    <?php
    include "../includes/footer.php";
    ?>
</div>
</body>
</html>

