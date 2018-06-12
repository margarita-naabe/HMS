<?php
//include connection file
$id = $_GET['id'];
include "../../private/connection.php";
// write your sql statement
$sql = "select * from patients_reg where id=$id ";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Check_Vitals</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder {
            height: 400px;
            width: 600px;
            text-align: center;
            background-color: yellowgreen;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        .Description {
            height: 50PX;
            width: 600px;
            text-align: center;
            color: white;
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
