
<?php
//include connection file
$id = $_GET['patient_id'];
include "../../private/connection.php";
// write your sql statement
$sql = "select * from consultation INNER JOIN patients_reg ON consultation.patients_id= patients_reg.id WHERE patients_reg.id= $id LIMIT 1";
echo $sql;
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) { ?>
<!DOCTYPE html>
<html>
<head>
    <title>LAB</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder{
            height: 800px;
            width: 600px;
            text-align: center;
            background-color:yellowgreen;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }
        .Description{
            height: 50PX;
            width:600px;
            text-align: center;
            color: white;
            margin-left: auto;
            margin-right: auto;
        }
        input {
            width: 250px;
            display: inline-block;
        }
        label{
            display:inline-block;
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
            <label>patients_id</label><input type="text"  name="patients_id"><br><br>
            <label>description</label>
            <input type="text" name="description"><br><br>
            <label>source_of_specimen</label><input type="text" name="source_of_specimen"><br><br>
            <input type="hidden" name="patients_id" value="<?=$id?>">
            <button>submit</button>
        </form>


</body>
</html>
 <?php
}
?>