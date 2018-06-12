<?php
include "../student/student_authentication.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Room details</title>
    <style>
        .Styling{
            text-align: center;
        }
    </style>
</head>
<body style="background-color: lightblue">
<div class="container">
<?php
include "../includes/mainnav.php";
?>
<div class="contentholder">
    <div class="headerholder">

        <header class="room">
            <div class="describe">
                <h1 class="Styling">ROOM INFORMATION </h1>
            </div>
            <div class="container">
        </header>
    <div class="room" id="room">
        <form role="form" method="post" action="roomdetailsreceive.php">

            <div class="form-group col-md-12">
                <label for="roomname"> Room Name:</label>
                <input type="text" name="roomname" id="roomname" class="form-control"
                       placeholder="Enter roomname" required>
            </div>

            <div class="form-group col-md-6">

                <label for="totalstudents:"> Total Students:</label>
                <input type="number" name="totalstudents" id="totalstudents" class="form-control" placeholder="Enter no. of students">
            </div>
            <div class="form-group col-md-12">
                <label for="amount"> Amount:</label>
                <input type="text" name="amount" id="amount" class="form-control"
                       placeholder="Enter Amount">
            </div>

            <div class="form-group col-md-6">
                <label for="beds"> Total Beds:</label>
                <input type="number" name="beds" id="beds" class="form-control"
                       placeholder="Enter no. of beds">
            </div>

            <div class="form-group col-md-6">
                <label for="gender"> Gender:</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="Female"> Female</option>
                    <option value="Male"> Male</option>
                </select>
            </div>

            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <input class="btn btn-success" type="submit" name="submit" value="Register" id="submit">
                    <input class="btn btn-default" type="reset" name="reset" value="Reset">
                </div>
            </div>

        </form>
    </div>

    </div>
</body>
</html>

