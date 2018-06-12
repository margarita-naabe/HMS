<?php
include "../../private/connection.php";

$patients_id= $_POST["patients_id"];
$description= $_POST["description"];
$source_of_specimen= $_POST["source_of_specimen"];

$sql = "INSERT INTO `lab` (`id`,  `patients_id`,  `description`,`source_of_specimen`)
VALUES (NULL,  '$patients_id', '$description', '$source_of_specimen')";

if (mysqli_query($connection,$sql)){
    echo "new record created successful";
}else {
    {
        echo mysqli_error($connection)."<BR>". $sql;
    }
    mysqli_close($connection);
}
$patients_id=$_POST["patients_id"];
$description=$_POST["description"];
$source_of_specimen=$_POST["source_of_specimen"];
echo $patients_id;
echo "<br>";
echo  $description;
echo "<br>";
echo $source_of_specimen;
echo "<br>";
?>

