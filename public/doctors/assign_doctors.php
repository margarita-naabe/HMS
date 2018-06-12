<?php
//include connection file
$patients_id = $_GET['patient_id'];
include "../../private/connection.php";
// write your sql statement
$sql = "select * from patients_reg where id=$patients_id ";
$result = mysqli_query($connection, $sql);
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
<body>
<?php
include "../includes/nav.php";
?>
<?php
while ($row = mysqli_fetch_assoc($result)) {print_r ($row)
    ?>
    <h1>Assign Consultation room to </h1>
    <p>Name: <?= $row['name']?> </p>
    <form method="post" action="assign-con-pro.php">
        <label for="con_room"> Select Consultation room</label>
        <select name="con_room" id="con_room">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <input type="hidden" name="patient_id" value="<?= $patients_id?>">
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>

</body>
</html>