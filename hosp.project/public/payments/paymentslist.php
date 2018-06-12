<html>
<head>
    <title>
        payments list
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
        <div class="row-title">name</div>
        <div class="row-title">age</div>
        <div class="row-title">gender</div>
    </div>

    <div class="columns-holder">

        <?php
        include "../../private/connection.php";
        $sql = "SELECT * FROM payments_to_be_made INNER JOIN patients_reg
         ON payments_to_be_made.id = patients_reg.id";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="column-small"><?php echo $row['id'] ?></div>
            <div class="column"><?php echo $row['name'] ?></div>
            <div class="column"><?php echo $row['age'] ?></div>
            <div class="column"><?php echo $row['gender'] ?></div>

            <div class="column-big">
            </div>
            <div class="column-big">
                <a href="../payments/payments.php?pid=<?php echo $row['patients_id'] ?>">
                    <button>confirm payment</button>
                </a>
            </div>
            <br><?php
        }
        ?>
    </div>
</div>
</body>
</html>

