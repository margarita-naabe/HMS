<?php
session_start();
include "../..//private/connection.php";
$error= array();
//creating variables to hold form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    if (empty($user_name)) {
        $error['username'] = "Username cannot be empty";
    }
    if (strlen($user_name) < 2) {
        $error['username1'] = "Your username must be atleast 2 characters long";
    }

    if (empty($password)) {
        $error['password'] = 'Password caanot be empty';
    }
    if (strlen($password) < 6) {
        $error['password1'] = "Your password must be atleast 6 characters long";
    }

//check errors
    if (count($error) == 0) {
        //redirect to the appropriate page
        header("location:login.php");
    } else {

        $sql = "select * from login WHERE username='$username' AND password= SHA1('$password')";

        $result = $connection->query($sql);

        if (!$row = $result->fetch_assoc()) {
            echo "Your username or password is incorrect";
        } else {
            header("location:../admin/index.php");
            $_SESSION['adminid'] = $row['adminid'];
            $_SESSION['adminusername'] = $row['adminusername'];


        }

    }
}


