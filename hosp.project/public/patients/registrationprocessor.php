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

$sql = "INSERT INTO `patients_reg` (`id`, `name`, `age`, `gender`, `date_of_birth`, `occupation`, `nationality`, `address`, `email`, `phone_number`, `emergency_contact`, `marital_status`) 
VALUES (NULL, '$name', '$age','$gender','$date_of_birth', '$occupation', '$nationality', '$address', '$email', '$phone_number', '$emergency_contact','$marital_status')";

if (mysqli_query($connection, $sql)) {

    $last_ins_id =mysqli_insert_id($connection);
    ?>
    <p>new record created successfully</p>
<p>Do you want to check the patients  vitals?</p>
    <a href="../check/check_vitals.php?id=<?= $last_ins_id?>">
        <button>Check vitals</button>
    </a>
<?php
} else {
    echo mysqli_error($connection) . "<BR>" . $sql;
}
mysqli_close($connection);

?>
