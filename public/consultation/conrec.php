<?php
include "../../private/connection.php";

$recommendation = $_POST["recommendation"];
$patients_id = $_POST["patients_id"];
$diagnosis = $_POST["diagnosis"];
$price = $_POST["price"];

if ($recommendation == "p") {
    $admitted = 0;
    $pharm = 1;
    $lab = 0;
    $xray = 0;

}elseif ($recommendation=="l"){
    $admitted = 0;
    $pharm = 0;
    $lab = 1;
    $xray = 0;
}elseif ($recommendation=="a"){
    $admitted = 1;
    $pharm = 0;
    $lab = 0;
    $xray =0;
}elseif ($recommendation=="x"){
    $admitted =0;
    $pharm =0;
    $lab =0;
    $xray =1;
}elseif ($recommendation=="t"){
    $admitted =0;
    $pharm =0;
    $lab =0;
    $xray =0;
}


$sql1 ="INSERT INTO `payments_to_be_made` (`id`,`patients_id`, `description`,`amount`) VALUES (NULL ,'$patients_id', 'consultation', '$price')";

$sql = "INSERT INTO `consultation` (`id`, `medication`, `patients_id`, `diagnosis`)  
VALUES (NULL, '$recommendation', '$patients_id', '$diagnosis')";

$updatequery = " UPDATE `hospital_management`.`daily_patients_interactions` SET attended=1, admitted =$admitted,lab =$lab, pharm =$pharm, xray=$xray WHERE daily_patients_interactions.patients_id=$patients_id";

if (mysqli_query($connection, $sql)) {
    if(mysqli_query($connection,$updatequery)){
        //running the sql
        if (mysqli_query($connection,$sql1)){

            echo "consultation record created successful";
            echo " <a href='../doctors/doctorslist.php'><button>go back home</button></a>";
        }


    }else{
        echo "something went wrong";
    }
} else {
    {
        echo mysqli_error($connection) . "<BR>" . $sql;
    }
    mysqli_close($connection);
}
?>