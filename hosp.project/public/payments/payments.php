<?php
if (isset($_GET)) {
    $patients_id = $_GET['pid'];
}
?>
<!doctype html5>
<html>
<head>
    <title>Payments</title>
    <link rel="stylesheet" href="../assets/css/nav.css">
    <style>
        .contentholder {
            height: 400px;
            width: 600px;
            text-align: center;
            background-color: yellowgreen;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        .Description {
            height: 50PX;
            width: 600px;
            text-align: center;
            color: white;
            margin-left: auto;
            margin-right: auto;
        }

        input {
            width: 250px;
            display: inline-block;
        }

        label {
            display: inline-block;
            width: 200px;
            float: left;
        }
    </style>
</head>
<body>
<?php
include "../includes/nav.php";
?>

<div class="contentholder">
    <div class="titleholder">
        <header class="class">
            <div class="Description">
                <h1 class="Styling">Payments </h1>
            </div>
        </header>
        <form method="post" action="paypro.php">
            <input type="hidden" name="patients_id" value="<?= $patients_id ?>"><br><br>
            <label>invoice_number</label>
            <input type="text" name="invoice_number"><br><br>
            <label>description</label>
            <textarea name="description">
            </textarea><br><br>
            <label>amount paid</label><input type="text" name="amount_paid"><br><br>
            <button>submit</button>
        </form>
</body>
</html>
