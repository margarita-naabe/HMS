<?php
include "../../private/connection.php";

$patients_id = $_POST["patients_id"];
$description = $_POST["description"];
$invoice_number = $_POST["invoice_number"];
$amount = $_POST["amount_paid"];


$sql = "INSERT INTO `payments` (`id`, `patients_id`, `invoice_number`, `description`, `amount`) 
VALUES (NULL, '$patients_id','$invoice_number','$description','$amount')";

if (mysqli_query($connection, $sql)) {
    echo "Payment completed successfully";
} else {
    {
        echo mysqli_error($connection) . "<BR>" . $sql;
    }
    mysqli_close($connection);
}
?>