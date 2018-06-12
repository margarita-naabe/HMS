<?php
include "../../private/connection.php";
$consultation_room = $_POST['con_room'];
$patients_id = $_POST['patient_id'];

$sql = "INSERT INTO `daily_patients_interactions`(`id`, `patients_id`, `consultation_room`, `admitted`, `lab`, `pharm`, `created_at`, `updated_at`)
 VALUES (NULL,'$patients_id','$consultation_room',0,0,0,CURRENT_TIMESTAMP ,CURRENT_TIMESTAMP )";

if (mysqli_query($connection, $sql)) {
    echo "Room $consultation_room has been assigned <br>";
    echo "Kindly  direct the patient to his/her consultation room <br>";
    echo "<a href='../index.php' ><button>Go Home</button></a>";
} else {
    {
        echo mysqli_error($connection) . "<BR>" . $sql;
    }
    mysqli_close($connection);
}
