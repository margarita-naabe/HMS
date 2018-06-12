<?php
//include connection file
$id = $_GET['id'];
include "../../private/connection.php";
// write your sql statement
$sql = "select * from patients_reg where id=$id ";
$result = mysqli_query($connection, $sql);
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check_Vitals</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet"  href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>

</head>

    <style>
        .contentholder {
            height: 400px;
            width: 600px;
            text-align: center;
            background-color: darkgray;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        .Description {
            height: 50PX;
            width: 600px;
            text-align: center;
            color: black;
            margin-left: auto;
            margin-right: auto;
        }

        input {
            width: 250px;
            display: inline-block;
        }

        label {
            display: inline-block;
            width: 200px;
            float: left;
        }
    </style>
</head>
<body>
<?php
include "../includes/nav.php";
?>
<div class="contentholder">
    <div class="titleholder">
        <header class="class">
            <div class="Description">
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <h1 class="Styling">Check Vitals of <?= $row['name'] ?></h1>
                    <form method="post" action="vitalsrec.php">
                        <label>Temperature </label><input type="text" name="temperature"><br>
                        <label>Height cm</label><input type="text" name="height"><br><br>
                        <label>Weight kg</label><input type="text" name="weight"><br><br>
                        <label>Blood_pressure</label><input type="text" name="blood_pressure"><br><br>
                        <input type="hidden" value="<?= $row['id'] ?>" name="patients_id">
                        <button>submit</button>
                    </form>
                <?php
                }
                ?>

            </div>
        </header>

</body>
</html>
