<!DOCTYPE html>
<html>
<head>
    <title>Admission</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder{
            height: 400px;
            width: 600px;
            text-align: center;
            background-color: olive;
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
include "includes/nav.php";
?>
<div class="contentholder">
    <div class="titleholder">
        <header class="class">
            <div class="Description">
                <h1 class="Styling">Admission </h1>
            </div>
        </header>
        <form method="post" action="adminrec.php">
            <label>ward</label><input type="text" name="ward"><br><br>
            <label>bed_number</label><input type="text"  name="bed_number"><br><br>
            <label>amount</label><input type="text" name="amount"><br><br>
            <button>submit</button>
        </form>
</body>
</html>
