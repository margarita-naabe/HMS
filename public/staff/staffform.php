<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/patstaff.css">
</head>
<body>
<?php
include"../includes/nav.php"
?>
<div class="contentholder">
    <H1 CLASS="header1">
        STAFF_FORM
    </H1>

    <div class="form">
        <form  method="post" action="staffreceive.php">
            <label>Name</label><input type ="text" name="name"><br>
            <label>Age</label><input type ="text" name="age"><br>
            <label>Date_Of_Birth</label><input type="text" name="date_of_birth"><br>
            <label>Gender</label><input type="text" name="gender"><br>
            <label>Nationality</label><input type="text" name="nationality"><br>
            <label>Address</label><input type="text" name="address"><br>
            <label>Email</label><input type="text" name="email"><br>
            <label>Phone_Number</label><input type="text" name="phone_number"><br>
            <label>Emergency_Contact</label><input type="text" name="emergency_contact"><br>
            <label>Marital_Status</label><input type="text" name="marital_status"><br>
            <label>Profession</label><input type="text" name="profession"><br>
            <button>Submit</button>
        </form>
    </div>
</div>
</body>
</body>
</html>
</body>
</html>