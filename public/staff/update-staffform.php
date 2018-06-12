<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>

        .form{
            height:100px;
            width:500px;
            margin-left:auto;
            margin-right:auto;
            margin-top:8px;
        }
        label{
            display: inline-block;
            width:100px;
        }
        .Patients_FORM{
            height:400px;
            width: 600px;
            background-color:aquamarine;
            margin-left:auto;
            margin-right:auto;
        }
        input{
            display:inline-block;
            width:100px;
        }
        .Patients{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include "../includes/nav.php";
?>
<div class="STAFF_FORM">
    <H1 CLASS="STAFF">
        STAFF_FORM
    </H1>
    <div class="form">
        <?php

        $id = $_GET['id'];
        include "../../private/connection.php";


        $sql="select * from patients_reg where id=$id ";
        $result=mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)){ ?>

            <form method="post" action="../patients/up-patients-pro.php">
                <label>Name</label><input type ="text" name="name" value="<?php echo $row['name'] ?>"><br>
                <label>Age</label><input type ="text" name="age" value="<?php echo $row['age'] ?>"><br>
                <label>Date_Of_Birth</label><input type="text" name="date_of_birth"  value="<?php echo $row['date_of_birth'] ?>"><br>
                <label>Gender</label><input type="text" name="gender" value="<?php echo $row['gender'] ?>"><br>
                <label>profession</label><input type="text" name="profession" value="<?php echo $row['profession'] ?>"><br>
                <label>Nationality</label><input type="text" name="nationality"  value="<?php echo $row['nationality'] ?>"><br>
                <label>Address</label><input type="text" name="address" value="<?php echo $row['address'] ?>"><br>
                <label>Email</label><input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
                <label>Phone_Number</label><input type="text" name="phone_number" value="<?php echo $row['phone_number'] ?>"><br>
                <label>Emergency_Contact</label><input type="text" name="emergency_contact" value="<?php echo $row['emergency_contact'] ?>"><br>
                <label>Marital_Status</label><input type="text" name="marital_status" value="<?php echo $row['marital_status'] ?>"><br><br>
                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                <button>Submit</button>
            </form>
        <?php }

        ?>
    </div>
</body>
</html