<?php
include "../../private/connection.php";
$id=$_POST['id'];
$sql="DELETE from hospital_management.patients_reg WHERE id=$id";
if(mysqli_query($connection,$sql)) {
    echo "record deleted successfully";
} else {
            echo "error deleting record".mysqli_error($connection);
    }
    mysqli_close($connection);


?>