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
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="panel">
                    <div class="panel-heading bg-primary" style="height:50px">
                        <p><?php echo $row['id'] ?>. <?php echo $row['name'] ?></p>
                    </div>

                    <div class="panel-body">
                        <div class="pull-left">
                            <p>name:
                            </p>
                            <p>age:<?php echo $row['age'] ?></p>
                            <p>gender:<?php echo $row['gender'] ?></p>
                            <p>date of Birth:<?php echo $row['date_of_birth'] ?></p>
                            <p>Nationality:<?php echo $row['nationality'] ?></p>
                        </div>
                        <div class="pull-right">
                            <p>Address:<?php echo $row['address'] ?></p>
                            <p>Email:<?php echo $row['email'] ?></p>
                            <p>Emergency Contact:<?php echo $row['emergency_contact'] ?></p>
                            <p>Occupation:<?php echo $row['occupation'] ?></p>
                            <p>Marital Status:<?php echo $row['marital_status'] ?></p>

                        </div>
                    </div>

                    <div class="panel-footer">
                        <div id="buttons" class="" style="height: 30px">

                            <div class="pull-right">
                            <a href="../patients/registeredpatientslist.php?id=<?php echo $row['id'] ?>" style="display: inline-block">
                                <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
                            </a>
                            <form method="post" action="delpatrec.php" style="display: inline-block">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <button class="btn btn-danger btn-sm" type="submit"><i class="glyphicon glyphicon-trash"></i></button>
                            </form>
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
</html>