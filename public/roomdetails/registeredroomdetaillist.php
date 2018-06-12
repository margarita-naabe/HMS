<?php
include "../student/student_authentication.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>
        registered room list
    </title>

</head>
<body style="background-color: lightblue">
<div class="container">
<?php
include "../includes/mainnav.php"
?>
    <div class="col-sm-2 col-md-2">
        <?php
        include "../includes/roomsidenav.php"
        ?>

    </div>

    <div class="col-sm-10 col-lg-8">

    <div class="font">
    <i style="color:green">LIST OF ROOMS AVAILABLE </i>
</div>


<div class="columns-holder">

    <?php
    include '../../private/connection.php';
    $sql = "SELECT * from room_details ";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) { ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $row['room_name'] ?>

                <div class="pull-right">
                    <div id="buttons">
                        <a href="updateroom_form.php?id=<?php echo $row['id'] ?>"
                           style="display: inline-block">
                            <button class=" btn btn-primary btn-sm" style="font-size: 10px;padding: 3px"><i
                                        class="glyphicon glyphicon-edit"></i> Update</button>
                        </a>
                        <form method="post" action="delroom.php" style="display: inline-block">

                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                            <button class=" btn btn-danger btn-sm" type="submit" style="font-size: 10px;height: 25px"><i
                                        class="glyphicon glyphicon-trash"></i></button>
                        </form>
                    </div>

                </div>
            </div>

            <div class="panel-body">
                <div class="pull-left">
                    <p> Gender: <?php echo $row['gender'] ?></p>
                    <p> Students Total: <?php echo $row['student_number'] ?></p>
                    <p>Amount: <?php echo $row['amount'] ?></p>
                    <p>Total Beds: <?php echo $row['total_beds'] ?></p>

                </div>
            </div>

        </div>

    <?php }
    ?>
</div>
</div>
</body>
</html>