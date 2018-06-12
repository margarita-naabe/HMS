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
    <link rel="stylesheet" href="../assets/css/list.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
<?php
include "../includes/labnav.php";
?>

        <?php
        include "../../private/connection.php";
        $sql = "SELECT * FROM `patients_reg` INNER JOIN `daily_patients_interactions`
         ON `patients_reg`.`id` = `daily_patients_interactions`.`patients_id` WHERE `daily_patients_interactions`.`lab` = 1";
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
                    </div>
                    <div class="pull-right">
                        <p>gender:<?php echo $row['gender'] ?></p>
                    </div>
                </div>

                <div class="panel-footer">
                    <div id="buttons" class="" style="height: 30px">

                        <div class="pull-right">
                            <a href="../lab/lablist.php?id=<?php echo $row['id'] ?>" style="display: inline-block">
                                <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i></button>
                            </a>
                            <form method="post" action="labrec.php" style="display: inline-block">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <button class="btn btn-primary btn-sm">Attend to Patients</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <hr>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>

