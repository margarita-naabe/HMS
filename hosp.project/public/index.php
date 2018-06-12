<html>
<head>
    <link rel="stylesheet" href="assets/css/nav.css">
    <style>
        .container{
            height: 400px;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            background-color: yellowgreen;
        }
        form{
            border:1px solid;
        }
        button{
            color: white;
            padding:14px 20px;
            margin-top: 10px;
            cursor: pointer;
            width: 170px;
            background-color: black;
            float:right;
            border: none;
            border-radius: 5px;
        }
        .imgcontainer{
            text-align :center;
            margin:15px 0 10px ;
        }.hospital{
             width: 200px;
             border-radius:100px;
             margin-top:auto ;
        .hospital-management-system{
            height:200px;
            width:600px;
            margin-left: auto;
            margin-right: auto;
            background-color: yellowgreen;
        }.hos{
             text-align: center;
         }
    </style>
</head>
<?php
include "includes/colors.php";
?>
<body bgcolor="<?=$rand_color?>">

<?php
include "includes/nav.php";
?>

<div class="container">
    <div class="imgcontainer">
        <img src="assets/images/hospital.jpg" alt="hospital" class="hospital">
        <div class="hospital-management-system">
            <h1 class="hos">Welcome</h1>

        </div>
    </div>
    <form action="action_page.php" method="get">
    </form>

</head>
<body>


    <div class="navholder">
        <ul class="nav">
            <li><a href="index.php">Search</a></li>
            <li><a href="patients/index.php"> Patient</a></li>
            <li><a href="doctors/index.php">Doctors</a></li>
            <li><a href="staff/index.php">Staff</a></li>
            <li><a href="lab/index.php">Lab</a></li>
            <li><a href="pharm/index.php">Pharm</a></li>
            <li><a href="xray/index.php">Xray</a></li>
            <li><a href="payments/index.php">Payments</a></li>
        </ul>
    </div>
</div>



</body>
</html>
