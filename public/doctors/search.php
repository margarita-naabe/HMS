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
    include "../includes/docnav.php";
    ?>

    <div class=" main-contents">
        <div class="list-holder">
            <div class="title-holder">
                <div class="row-title-small">Id</div>
                <div class="row-title">name</div>
                <div class="row-title">age</div>
                <div class="row-title">gender</div>
                <div class="row-title">admitted</div>
                <div class="row-title-big">Attend to Patients</div>
            </div>

            <div class="columns-holder">

                <?php
                include "../../private/connection.php";
                $sql = "SELECT * FROM patients_reg INNER JOIN daily_patients_interactions
         ON patients_reg.id = daily_patients_interactions.patients_id  WHERE name LIKE '%$search_for%'";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['admitted'] == 0) {
                        $admitted = "NO";
                    } elseif ($row['admitted'] == 1) {
                        $admitted = "YES";
                    }

                    ?>
                    <div class="column-small"><?php echo $row['id'] ?></div>
                    <div class="column"><?php echo $row['name'] ?></div>
                    <div class="column"><?php echo $row['age'] ?></div>
                    <div class="column"><?php echo $row['gender'] ?></div>
                    <div class="column"><?php echo $admitted ?></div>
                    <div class="column-big">
                        <a href="../consultation/consultation.php?patient_id=<?php echo $row['patients_id'] ?>">
                            <button>attend to patients</button>
                        </a>
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



