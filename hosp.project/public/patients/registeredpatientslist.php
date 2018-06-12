<html>
<head>
    <title>
        registered patients list
    </title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/regpatientslist.css">
</head>

<body>
<?php
include "../includes/nav.php";
?>

<div class="list-holder">
    <div class="title-holder">
        <div class="row-title-small">Id</div>
        <div class="row-title">Name</div>
        <div class="row-title">Age</div>
        <div class="row-title">Gender</div>
        <div class="row-title">Date_of_birth</div>
        <div class="row-title">Occupation</div>
        <div class="row-title">address</div>
        <div class="row-title-big">email</div>
        <div class="row-title-big">phone_number</div>
        <div class="row-title-big">emergency_contact</div>
        <div class="row-title">marital_status</div>
    </div>

    <div class="columns-holder">

        <?php
        include "../../private/connection.php";
        $sql = "SELECT * from patients_reg";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="column-small"><?php echo $row['id'] ?></div>
            <div class="column"><?php echo $row['name'] ?></div>
            <div class="column"><?php echo $row['age'] ?></div>
            <div class="column"><?php echo $row['gender'] ?></div>
            <div class="column"><?php echo $row['date_of_birth'] ?></div>
            <div class="column"><?php echo $row['occupation'] ?></div>
            <div class="column"><?php echo $row['address'] ?></div>
            <div class="column-big"><?php echo $row['email'] ?></div>
            <div class="column-big"><?php echo $row['phone_number'] ?></div>
            <div class="column-big"><?php echo $row['emergency_contact'] ?></div>
            <div class="column"><?php echo $row['marital_status'] ?></div>
            <div class="column-small">
                <a href="update-patientsform.php?id=<?php echo $row['id'] ?>">
                <button class="button-form">U</button></a>
            </div>
            <div class="column-small">
                <form method="post" action="delpatrec.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button  type="submit" class="button-form">D</button>
                </form>
            </div>

                <br>

            <?php
        }
        ?>
    </div>
</div>
</body>
</html>

