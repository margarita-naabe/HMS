<?php
include "..//../private/connection.php";

$email_address = $_POST["email_address"];
$password = $_POST["password"];
$user_name = $_POST["user_name"];
$full_name = $_POST["full_name"];
$role=$_POST["role"];
$id=$_POST["id"];

$sql="select  *  from login WHERE email_address= '$email_address AND '$password'=SHA1('password')";

 $result = $connection->query($sql);
 
    if (!$row = $result->fetch_assoc()) {
    echo" Your email_address  or password is correct";
    }
    else{

    }
