<?php
include "../../private/connection.php";

$ward = $_POST["ward"];
$bed_number= $_POST["bed_number"];
$amount= $_POST["amount"];

$sql = "INSERT INTO `admin` (`id`, `ward`, `bed_number`, `amount`)
VALUES (NULL, '$ward', '$bed_number', '$amount', '$gender',  '$diagnosis','$description', '$source_of_specimen')";

if (mysqli_query($connection,$sql)){
    echo "new record created successful";
}else {
    {
        echo mysqli_error($connection)."<BR>". $sql;
    }
    mysqli_close($connection);
}
$ward=$_POST['ward'];
$bed_number=$_POST["bed_number"];
$amount=$_POST["amount"];
echo ward;
echo"<br>";
echo bed_number;
echo "<br>";
echo amount;
echo "<br>";
?>

