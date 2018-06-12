<html>
<head>
    <title>
        p list
    </title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/regpatientslist.css">
</head>

<body>
<?php
include "../includes/nav.php";
?>

<div class="list-holder">
    <div class="title-holder">
        <div class="row-title-small">Id</div>
        <div class="row-title">name</div>
        <div class="row-title">gender</div>
    </div>

    <div class="columns-holder">

        <?php
        include "../../private/connection.php";
        $sql = "SELECT * FROM `patients_reg` INNER JOIN `daily_patients_interactions`
         ON `patients_reg`.`id` = `daily_patients_interactions`.`patients_id` WHERE `daily_patients_interactions`.`lab` = 1";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="column-small"><?php echo $row['id'] ?></div>
            <div class="column"><?php echo $row['name'] ?></div>
            <div class="column"><?php echo $row['gender'] ?></div>

            <div class="column-big">
            </div>
            <div class="column-big">
                <a href="../lab/lab.php?patient_id=<?php echo $row['patients_id'] ?>">
                    <button>attend to patients</button></a>
            </div>
            <br><?php
        }
        ?>
    </div>
</div>
</body>
</html>

