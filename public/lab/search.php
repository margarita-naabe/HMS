<?php
if (isset($_GET['search'])) {
    $search_for = $_GET['search'];
}
?>
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
    include "../includes/labnav.php";
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
         ON `patients_reg`.`id` = `daily_patients_interactions`.`patients_id` WHERE `daily_patients_interactions`.`lab` = 1 AND name LIKE '%$search_for%'";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column-small"><?php echo $row['id'] ?></div>
                    <div class="column"><?php echo $row['name'] ?></div>
                    <div class="column"><?php echo $row['gender'] ?></div>
                    <div class="column-big">
                        <a href="../lab/lab.php?patient_id=<?php echo $row['patients_id'] ?>">
                            <button>attend to patients</button></a>
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

