<?php
$root = "http://localhost/hospitalmgtsys/public/"
?>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Welcome</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="<?= $root ?>index.php">Home</a></li>
            <li><a href="<?= $root ?>patients/registration.php">Registration</a></li>
            <li><a href="<?= $root ?>patients/registeredpatientslist.php">Patients List</a></li>
            <li><a href="<?= $root ?>patients/assigndoclist.php">Unattended P. list</a></li>
        </ul>
    </div>
</nav>