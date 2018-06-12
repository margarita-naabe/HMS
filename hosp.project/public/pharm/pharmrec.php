<?php
include "../../private/connection.php";

$patients_name = $_POST["patients_name"];
$patients_id= $_POST["patients_id"];
$description_of_drugs= $_POST["description_of_drugs"];
$amount= $_POST["amount"];

$sql = "INSERT INTO `pharm` (`id`, `patients_name`, `patients_id`, `description_of_drugs`, `amount`)
VALUES (NULL, '$patients_name', '$patients_id', '$description_of_drugs', '$amount')";

if (mysqli_query($connection,$sql)){
    echo "new record created successful";
}else {
    {
        echo mysqli_error($connection)."<BR>". $sql;
    }
    mysqli_close($connection);
}
$patients_name=$_POST['patients_name'];
$patients_id=$_POST["patients_id"];
$description_of_drugs=$_POST["description_of_drugs"];
$amount=$_POST["amount"];
echo $patients_name;
echo"<br>";
echo $patients_id;
echo "<br>";
echo $description_of_drugs;
echo "<br>";
echo $amount;
echo "<br>";
?>

