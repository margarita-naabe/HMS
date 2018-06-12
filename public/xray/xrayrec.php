<?php
include "../../private/connection.php";

$id = $_POST["id"];
$patients_id= $_POST["patients_id"];

$sql = "INSERT INTO `xray` (`id`,`patients_id`,)
VALUES (NULL, '$id', '$patients_id',)";

if (mysqli_query($connection,$sql)){
    echo "new record created successful";
}else {
    {
        echo mysqli_error($connection)."<BR>". $sql;
    }
    mysqli_close($connection);
}
$id=$_POST['id'];
$patients_id=$_POST["patients_id"];
echo $id;
echo"<br>";
echo $patients_id;
echo "<br>";
?>
