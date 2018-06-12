<?php
//include connection file
$id = $_GET['patients_id'];
include "../../private/connection.php";
// write your sql statement
$sql = "select * from patients_reg INNER JOIN vitals ON patients_reg.id= vitals.patients_id WHERE patients_reg.id= $id LIMIT 1";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) { ?>
    <!doctype html>
    <html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet"  href="../assets/css/bootstrap.css">
        <script src="../assets/js/bootstrap.js"></script>
    </head>
    <title>CONSULTATION</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder {
            height: 300px;
            width: 600px;
            text-align: center;
            background-color: beige;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
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

    <p>Name<?= $row['name'] ?> </p>
    <p>Age<?= $row['age'] ?></p>
    <p>Sex<?= $row['gender'] ?></p>
    <p>Bloodpressure<?= $row['blood_pressure'] ?></p>
    <p>Temp<?= $row['temperature'] ?></p>
    <p>Height<?= $row['height'] ?></p>
    <p>Weight<?= $row['weight'] ?></p>

</div>

<div class="contentholder">
    <div class="titleholder">
        <header class="class">
            <div class="Description">
                <h1 class="Styling">CONSULTATION_FORM </h1>
                    <h1 class="Styling">Check Vitals of <?= $row['name'] ?></h1>


            </div>
        </header>

        <form method="post" action="doconrec.php">
            <br>
            <div class="medication"></div>
            <label>medication</label>
            <select name="medication">
                <option value="Pharmacy">Pharmacy</option>
                <option value="lab_test"> lab_test</option>
                <option value="admission">admission</option>

            </select>
            <br>
            <label>patients_id</label><input type="text" name="patients_id"><br><br>
            <label>diagonsis</label><textarea type="text" name="diagonsis"></textarea> <br><br>
            <button>submit</button>
        </form>
    </div>
</body>
</html>
    <?php
}
?>