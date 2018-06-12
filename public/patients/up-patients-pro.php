<?php
include "../../private/connection.php";


$name = $_POST["name"];
$age = $_POST["age"];
$date_of_birth = $_POST["date_of_birth"];
$gender = $_POST["gender"];
$occupation = $_POST["occupation"];
$nationality = $_POST["nationality"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$emergency_contact = $_POST["emergency_contact"];
$marital_status = $_POST["marital_status"];
$id = $_POST['id'];

$sql = "UPDATE patients_reg SET  `name`='$name', `age` ='$age', `gender`='$gender',`date_of_birth`='$date_of_birth', `Occupation` ='$occupation',
 `address` ='$address', `email` ='$email', `phone_number`='$phone_number', `emergency_contact`='$emergency_contact', `marital_status`='$marital_status' 
  WHERE id=$id";


 if (mysqli_query($connection,$sql)){
  echo "update successful";
  }else {
      echo mysqli_error($connection)."<BR>". $sql;
  }
mysqli_close($connection);
?>