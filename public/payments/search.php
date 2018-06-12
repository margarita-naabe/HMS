<?php
if (isset($_GET['search'])) {
    $search_for = $_GET['search'];
}
?>
<html>
<head>
    <title>
        payments list
    </title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>

<body>
<div class="container">
    <?php
    include "../includes/paynav.php";
    ?>

    <div cllass="main-content">
        <div class="list-holder">
            <div class="title-holder">
                <div class="row-title-small">Id</div>
                <div class="row-title">name</div>
                <div class="row-title">age</div>
                <div class="row-title">gender</div>
                <div class="row-title-big">Buttons</div>
            </div>

            <div class="columns-holder">

                <?php
                include "../../private/connection.php";
                $sql = "SELECT * FROM payments_to_be_made INNER JOIN patients_reg
         ON payments_to_be_made.id = patients_reg.id WHERE name LIKE '%$search_for%'";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="column-small"><?php echo $row['id'] ?></div>
                    <div class="column"><?php echo $row['name'] ?></div>
                    <div class="column"><?php echo $row['age'] ?></div>
                    <div class="column"><?php echo $row['gender'] ?></div>
                    <div class="column-big">
                        <a href="../payments/payments.php?pid=<?php echo $row['patients_id'] ?>">
                            <button>confirm payment</button>
                        </a>
                    </div>
                    <br>
                    <hr>
                    <?php
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

