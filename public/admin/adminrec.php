<?php
include "../../private/connection.php";

$error = array();

//creating variables to hold form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$full_name = $_POST['full_name'];
$user_name = $_POST['user_name'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];
$role = $_POST['role'];


if (empty($full_name)) {
    $error['full_name'] = "Fullname cannot be empty";
}
if (strlen($full_name) < 2) {
    $error['fullname1'] = "Your fullname must be atleast 2 characters long";
}

if (empty($user_name)) {
    $error['username'] = "Username cannot be empty";
}
if (strlen($user_name) < 2) {
    $error['username1'] = "Your username must be atleast 2 characters long";
}
if (empty($email_address)) {
    $error['email'] = "Email cannot be empty";
}
if (strlen($email_address) < 4) {
    $error['email1'] = "Your email must be atleast 4 characters long";
}
if (empty($password)) {
    $error['password'] = 'Password caanot be empty';
}
if (strlen($password) < 6) {
    $error['password1'] = "Your password must be atleast 6 characters long";
}
if (empty($c_password)) {
    $error['c_password'] = "Confirm password cannot be empty";
}
if (strlen($c_password) < 6) {
    $error['c_password1'] = "Your password confirmation must be atleast 6 characters long";
}

//check errors
if (!count($error) == 0) {
    //redirect to the appropriate page
} else{

// execute sql
// checking to see if none of the form fields are empty
if ($full_name != "" && $user_name != "" && $email_address != "" && $password != "" && $role != "" && $password == $c_password) {

//create sql to insert into database


$sql = "INSERT INTO `login`.`users` 
        (`id`, `full_name`, `user_name`, `email_address`, `password`, `role`) VALUES
        (NULL, '$full_name', '$user_name', '$email_address', SHA1('$password'), '$role')";

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body style="background-color: lightblue">
<div class="container">
    <?php
    include "../includes/nav.php";
    ?>

    <?php

    // output entry successful
    if (mysqli_query($connection, $sql)) {
        ?>


        <h1 class="text-success text-center"> Entry successful</h1>
        <br>
        <div class="container">

            <a href='userslist.php'>
                <button class=" btn btn-primary btn-lg" style=" margin-left: auto; margin-right: auto;display: block;">
                    <i class="glyphicon glyphicon-book"></i> All Users
                </button>
            </a>
        </div>

        <?php
    } else {
        echo mysqli_error($connection) . $sql;
    }
    } // display error
    else {
        echo "please ensure all form fields are filled";
    }
    }
    } else {
        echo "Sorry, wrong Request";
    }

    //close connection
    mysqli_close($connection);

    ?>
</div>
</body>
</html>
