<?php
include "../../private/connection.php";

$name = $_POST["name"];
$age = $_POST["age"];
$date_of_birth = $_POST["date_of_birth"];
$gender = $_POST["gender"];
$nationality = $_POST["nationality"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$emergency_contact = $_POST["emergency_contact"];
$marital_status = $_POST["marital_status"];
$profession=$_POST['profession'];

$sql = "INSERT INTO `staff` (`id`, `name`, `age`, `date_of_birth`, `gender`, `nationality`, `address`, `email`, 
`phone_number`, `emergency_contact`, `marital_status`, `profession`) 
VALUES (NULL, '$name', '$age', '  $date_of_birth', '$gender', '$nationality', '$address', '$email', '$phone_number', '$emergency_contact',
 '$marital_status', '$profession')";

if (mysqli_query($connection,$sql)){
    echo "new record created successful";
}else {
    {
        echo mysqli_error($connection)."<BR>". $sql;
    }
    mysqli_close($connection);
}
$name=$_POST['name'];
$age=$_POST["age"];
$date_of_birth=$_POST["date_of_birth"];
$gender=$_POST["gender"];
$nationality=$_POST["nationality"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone_number=$_POST["phone_number"];
$emergency_contact=$_POST["emergency_contact"];
$marital_status=$_POST["marital_status"];
$profession=$_POST["profession"];
echo $name;
echo"<br>";
echo $age;
echo "<br>";
echo $date_of_birth;
echo"<br>";
echo $gender;
echo"<br>";
echo $nationality;
echo "<br>";
echo $address;
echo "<br>";
echo $email;
echo "<br>";
echo $phone_number;
echo "<br>";
echo $emergency_contact;
echo "<br>";
echo $marital_status;
echo "<br>";
echo $profession;
echo "<br>";
?>