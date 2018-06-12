<?php
$root = "http://localhost/hospitalmgtsys/public/"
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Welcome</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="<?= $root ?>index.php ">Home</a></li>
            <li><a href="<?= $root ?>patients/index.php">Patients</a></li>
            <li><a href="<?= $root ?>doctors/index.php">Doctors</a></li>
            <li><a href="<?= $root ?>staff/index.php">Staff</a></li>
            <li><a href="<?= $root ?>lab/index.php">Lab</a></li>
            <li><a href="<?= $root ?>pharm/index.php">Pharm</a></li>
            <li><a href="<?= $root  ?>xray/index.php">Xray</a></li>
            <li><a href="<?= $root  ?>payments/index.php">Payment</a></li>
        </ul>
    </div>
</nav>

