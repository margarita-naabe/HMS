
<?php
include "../student/student_authentication.php";
include "../../private/connection.php";
//creating variables to hold form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roomname = $_POST['roomname'];
    $totalstudents = $_POST['totalstudents'];
    $totalamount = $_POST['amount'];
    $beds = $_POST['beds'];
    $gender =$_POST['gender'];
// execute sql
    // checking to see if none of the form fields are empty


    if ($roomname != "" && $totalstudents != "" && $totalamount != "" && $beds != "" && $gender!="") {

        //create sql to insert into database


        $sql = "INSERT INTO `hostel_db`.`room_details` 
    (`id`,`room_name`, `student_number`, `amount`, `total_beds`,`gender`) 
    VALUES (NULL, '$roomname','$totalstudents', '$totalamount', '$beds','$gender')";


        // execute sql;
// output entry successful
        if (mysqli_query($connection, $sql)) {

            $last_inserted_id = mysqli_insert_id($connection);

            $sql2 = "INSERT INTO `hostel_db`.`rooms_available` (`id`,`room_id`,`available_space`)
 VALUES (NULL, '$last_inserted_id','$totalstudents')";

            if (mysqli_query($connection, $sql2)) {
                echo "<h3 class='alert-info text-center'  >  room created successfully</h3>";
            } else {
                echo "something went wrong";
            }

        } else {
            echo mysqli_error($connection) . $sql;
        }
    } // display error
    else {
        echo "please ensure all form fields are filled";
    }

} else {
    echo "Sorry, wrong Request";
}

//close connection
mysqli_close($connection);

?>