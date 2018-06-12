<?php
$root = "http://localhost/hospitalmgtsys/public/"
?>

<head>
    <style>
        .search-holder{
            padding-top: 12px;
        }
    </style>
</head>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Welcome</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="<?= $root ?>index.php">Home</a></li>
            <li><a href="<?= $root ?>pharm/pharmlist.php">
                    Pharmacy List
                </a></li>
            <li class="search-holder">
                <form method="get" action="search.php"><div class="search-input"><div class="search-icon"></div><input type="search" name="search"></form>
            </li>
        </ul>
    </div>
    </div>
</nav>