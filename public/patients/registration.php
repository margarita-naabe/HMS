<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>

<?php
include "../includes/patientsnav.php";
?>
<div class="container">
    <div class="row">
        <form method="post" action="registrationprocessor.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="age">Age:</label>
                <div class="col-sm-10">
                    <input type="text"  name="age" class="form-control" id="age" placeholder="Age">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="date_of_birth">Date Of Birth:</label>
                <div class="col-sm-10">
                    <input type="text" name="date of birth" class="form-control" id="date_of_birth" placeholder="Date Of Birth">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gender">Gender:</label>
                <div class="col-sm-10">
                    <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="occupation">Occupation:</label>
                <div class="col-sm-10">
                    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nationality">Nationality:</label>
                <div class="col-sm-10">
                    <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">
                    <input type="text"  name="address" class="form-control" id="address" placeholder="Address">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phone_number">Phone Number:</label>
                <div class="col-sm-10">
                    <input type="text"   name="phone number" class="form-control" id="phone_number" placeholder="Phone Number">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="emergency_contact">Emergency Contact:</label>
                <div class="col-sm-10">
                    <input type="text" name="emergency contact" class="form-control" id="emergency_contact" placeholder="Emergency Contact">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2"  for="marital_status">Marital Status:</label>
                <div class="col-sm-10">
                    <input type="text"  name="marital status" class="form-control" id="marital_status" placeholder="Marital Status">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include "../includes/footer.php";
?>
</body>
</html>