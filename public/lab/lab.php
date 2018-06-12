<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport content=" width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
          minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>LAB</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>

</head>
<body>


<?php
include "../includes/labnav.php";
//include connection file
$id = $_GET['patient_id'];


include "../../private/connection.php";
// write your sql statement
$sql = "select * from consultation INNER JOIN patients_reg ON consultation.patients_id= patients_reg.id WHERE consultation.patients_id=$id LIMIT 1";
$result = mysqli_query($connection, $sql);


?>

<div class="container">

    <?php

    if ($result->num_rows==0) {
        echo "<p> Record not found</p>";
    } else {

        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <div class="contentholder">
                <div class="titleholder">
                    <div class="holder">
                        <div class="titleholder">
                            <h1 class="Styling">Diagnosis by DOCTOR</h1>
                        </div>

                        <p>Name: <?= $row['name'] ?> </p>
                        <p>Age : <?= $row['age'] ?></p>
                        <p>Sex : <?= $row['gender'] ?></p>
                        <p>Diagnosis : <?= $row['diagnosis'] ?></p>

                    </div>
                    <header class="class">
                        <div class="Description">
                            <h1 class="Styling">Lab </h1>
                        </div>
                    </header>
                    <form method="post" action="labrec.php">
                        <label>patients_id</label><input type="text" name="patients_id"><br><br>
                        <label>description</label>
                        <input type="text" name="description"><br><br>
                        <label>source_of_specimen</label><input type="text" name="source_of_specimen"><br><br>
                        <input type="hidden" name="patients_id" value="<?= $id ?>">
                        <button>submit</button>
                    </form>
                </div>

            </div>

            <?php
        }
    }

    ?>

</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>