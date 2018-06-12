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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet"  href="../assets/css/bootstrap.css">
    <script src="assets/bootstrap.js"></script>
</head>
<body>
<div class="container">
<?php
include "../includes/pharmnav.php";
?>

    <div class="main-contents">
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
            <label>Description of drugs</label><input type="text" name="description_of_drugs"><br><br>
            <label>Amount Ghs</label><input type="text" name="amount"><br><br>
            <button>submit</button>
        </form>
    </div>
    <?php
    include"../includes/footer.php";
    ?>
    </div>
</body>
</html>
