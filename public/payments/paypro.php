<?php
include "../../private/connection.php";

$patients_id = $_POST["patients_id"];
$description = $_POST["description"];
$amount = $_POST["amount_paid"];


$sql = "INSERT INTO `payments` (`id`, `patients_id`,  `description`, `amount`) 
VALUES (NULL, '$patients_id','$description','$amount')";

if (mysqli_query($connection, $sql)) {
    echo "Payment completed successfully";
} else {
    {
        echo mysqli_error($connection) . "<BR>" . $sql;
    }
    mysqli_close($connection);
}
?>