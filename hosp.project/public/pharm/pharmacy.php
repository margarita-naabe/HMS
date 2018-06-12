<?php
//include connection file
$id = $_GET['id'];
include "../../private/connection.php";
// write your sql statement
$sql = "select * from patients_reg where id=$id ";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder{
            height: 400px;
            width: 600px;
            text-align: center;
            background-color: yellowgreen;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }
        .Description{
            height: 50PX;
            width:600px;
            text-align: center;
            color: white;
            margin-left: auto;
            margin-right: auto;
        }
        input {
            width: 250px;
            display: inline-block;
        }
        label{
            display:inline-block;
            width: 200px;
            float: left;
        }
    </style>
</head>
<body>
<?php
include "../includes/nav.php";
?>

<div class="contentholder">
    <div class="titleholder">
        <header class="class">
            <div class="Description">
                <h1 class="Styling">pharmacy </h1>
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <?php
                }
                ?>
            </div>
        </header>
        <form method="post" action="pharmrec.php">
            <label>Patients name</label><input type="text" name="patients_name"><br><br>
            <label>Patients id</label><input type="text"  name="patients_id"><br><br>
            <label>Description of drugs</label><input type="text" name="description_of_drugs"><br><br>
            <label>Amount Ghs</label><input type="text" name="amount"><br><br>
            <button>submit</button>
        </form>
</body>
</html>
