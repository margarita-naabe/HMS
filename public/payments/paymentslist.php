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
        payments list
    </title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>

<body>
<div class="container-fluid">
    <?php
    include "../includes/paynav.php";
    ?>

                <?php
                include "../../private/connection.php";
                $sql = "SELECT * FROM payments_to_be_made INNER JOIN patients_reg
         ON payments_to_be_made.id = patients_reg.id";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
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
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div id="buttons" class="" style="height: 30px">

                                <div class="pull-right">
                                    <a href="../payments/paymentslist.php?id=<?php echo $row['patients_id'] ?>" style="display: inline-block">
                                        <button class="btn btn-primary btn-sm">Confirm Payments</button>
                                    </a>
                                    <form method="post" action="labrec.php" style="display: inline-block">
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
</body>
</html>

