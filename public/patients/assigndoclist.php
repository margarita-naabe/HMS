<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>

<body>
<?php
include "../includes/nav.php";
?>

<div class="container">

    <div class="container">

        <?php
        include "../../private/connection.php";
        $sql = "SELECT * from patients_reg";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {  print_r ($row)?>

            <div class="panel">
                <div class="panel-heading bg-primary" style="height:50px">
                    <p><?php echo $row['id'] ?>. <?php echo $row['name'] ?></p>
                </div>

                <div class="panel-body">
                    <div class="pull-left">
                        <p>id:
                        </p>
                        <p>name:<?php echo $row['name'] ?></p>
                        <p>age:<?php echo $row['age'] ?></p>
                        <p>gender:<?php echo $row['gender'] ?></p>
                    </div>
                    <div class="pull-right">
                        <p>gender:<?php echo $row['gender'] ?></p>

                    </div>
                </div>

                <div class="panel-footer">
                    <div id="buttons" class="" style="height: 30px">


                        <div class="pull-right">
                            <a href="../consultation/assign_doctors.php?patient_id=<?php echo $row['id'] ?>" style="display: inline-block">
                                <button class="btn btn-primary btn-sm">Assign Doctors</button>
                            </a>
                            <a href="../check/check_vitals.php?id=<?php echo $row['id'] ?>" style="display: inline-block">
                                <button class="btn btn-primary btn-sm">Check Vitals</button>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <br>
            <?php
        }
        ?>
    </div>
</div>
<?php
include "../includes/footer.php";
?>
</body>


