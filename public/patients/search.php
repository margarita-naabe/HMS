<?php
if (isset($_GET['search'])) {
    $search_for = $_GET['search'];
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>

<body>

<div class="container">


    <?php
    include "../includes/patientsnav.php";
    ?>

    <div class="main-contents">


        <div class="list-holder">
            <div class="title-holder">
                <div class="row-title-small">Id</div>
                <div class="row-title-big">Name</div>
                <div class="row-title">Age</div>
                <div class="row-title">Gender</div>
                <div class="row-title">Birth Date</div>
                <div class="row-title">Occupation</div>
                <div class="row-title">address</div>
                <div class="row-title-big">email</div>
                <div class="row-title-big">Phone#</div>
                <div class="row-title-big">Emergency #</div>
                <div class="row-title">Status</div>
                <div class="row-title">Buttons</div>
            </div>

            <div class="columns-holder">

                <?php
                include "../../private/connection.php";
                $sql = "SELECT * from patients_reg WHERE name LIKE '%$search_for%'";
                $result = mysqli_query($connection, $sql);
                $num_rows= mysqli_num_rows($result);

                if($num_rows > 0){


                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="column-small"><?php echo $row['id'] ?></div>
                    <div class="column-big"><?php echo $row['name'] ?></div>
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
                            <button class="button-form">U</button>
                        </a>
                    </div>
                    <div class="column-small">
                        <form method="post" action="delpatrec.php">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <button type="submit" class="button-form">D</button>
                        </form>
                    </div>

                    <br>
                    <hr>
                    <?php
                }


                }else{
                    echo "<p> No results found for: $search_for</p>";
                }
                ?>
            </div>
        </div>


    </div>

    <?php
    include "../includes/footer.php";
    ?>
</div>
</body>
</html>

