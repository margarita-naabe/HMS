<?php
//include connection file
$id = $_GET['patient_id'];
include "../../private/connection.php";
// write your sql statement

//this sql

$sql3="select price from services WHERE  service_type='consultation'";
$result2 = mysqli_query($connection,$sql3);
while ($row = mysqli_fetch_assoc($result2)) {
    $price= $row["price"];
}

$sql = "select * from patients_reg INNER JOIN vitals ON patients_reg.id= vitals.patients_id WHERE patients_reg.id= $id LIMIT 1";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) { ?>
<html>
<head>
    <title>CONSULTATION</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder {
            height: 300px;
            width: 600px;
            text-align: center;
            background-color: rebeccapurple;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
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

        .medication {
            width: 200px;
            display: inline-block;
            float: left;
        }

        .holder {
            height: 400px;
            background-color: beige;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php
include "../includes/nav.php";
?>

<div class="holder">
    <div class="titleholder">
    <h1 class="Styling">Patients Vitals</h1>
    </div>

    <p>Name: <?= $row['name'] ?> </p>
    <p>Age : <?= $row['age'] ?></p>
    <p>Sex : <?= $row['gender'] ?></p>
    <p>Bloodpressure : <?= $row['blood_pressure'] ?></p>
    <p>Temp : <?= $row['temperature'] ?></p>
    <p>Height : <?= $row['height'] ?></p>
    <p>Weight : <?= $row['weight'] ?></p>

</div>

<div class="contentholder">
    <div class="titleholder">
        <header class="class">
            <div class="Description">
                <h1 class="Styling">CONSULTATION_FORM </h1>


            </div>
        </header>

        <form method="post" action="conrec.php">
            <br>
            <div class="medication"></div>
            <label>medication</label>
            <select name="recommendation">
                <option value="p">Pharmacy</option>
                <option value="l"> lab_test</option>
                <option value="x">xray</option>
                <option value="t">theatre</option>ri
                <option value="a">admission</option>

            </select>
            <br>
            <br>
            <label>diagnosis</label><textarea type="text" name="diagnosis"></textarea> <br><br>
            <input type="hidden" name="patients_id" value="<?=$id?>">
            <input type="hidden" name="price" value="<?=$price?>">
            <button>submit</button>
        </form>
    </div>
</body>
</html>
    <?php
}
?>