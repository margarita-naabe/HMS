<?php
//include connection file
$id = $_GET['patient_id'];
include "../../private/connection.php";
// write your sql statement
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
                background-color: yellowgreen;
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
            <h1 class="Styling">Diagnosis by DOCTOR</h1>
        </div>

        <p>Name: <?= $row['name'] ?> </p>
        <p>Age : <?= $row['age'] ?></p>
        <p>Sex : <?= $row['gender'] ?></p>
        <p>Diagnosis : <?= $row['diagnosis'] ?></p>

    </div>
                <input type="hidden" name="patients_id" value="<?=$id?>">
                <button>submit</button>
            </form>
        </div>
    </body>
    </html>
    <?php
}
