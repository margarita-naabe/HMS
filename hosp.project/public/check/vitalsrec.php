<?php
include "../../private/connection.php";

$temperature = $_POST["temperature"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$blood_pressure = $_POST["blood_pressure"];
$patients_id = $_POST['patients_id'];
$sql = "INSERT INTO `vitals` (`id`,`patients_id`,`temperature`, `height`, `weight`,`blood_pressure`)  
VALUES (NULL, '$patients_id','$temperature', '$height', '  $weight', ' ')";

if (mysqli_query($connection, $sql)) {
    echo "Vitals have been saved <br>";
    echo "Kindly select a consultation Room <br>";
    echo "<a href='../consultation/assign_doctors.php?patient_id=$patients_id' ><button>Assign Consultation room</button></a>";
} else {
    {
        echo mysqli_error($connection) . "<BR>" . $sql;
    }
    mysqli_close($connection);
}
