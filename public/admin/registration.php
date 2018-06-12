<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>admin page</title>
</head>
<body style="background-color: lightblue">
<div class="container">
    <?php
    include "../includes/nav.php"
    ?>

    <div class="row">
        <div class="col-sm-2 col-md-2">
            <?php
            include "../includes/adminnav.php";
            ?>
        </div>
        <div class="col-sm-10 col-lg-10">

            <div class="contentholder">
                <div class="headerholder">
                    <header class="staff">
                        <div class="describe">
                            <h1 class="Styling" style="text-align: center">ADMINISTRATOR PAGE </h1>
                        </div>
                    </header>
                    <div id="admin" class="admin">
                        <form role="form" method="post" action="adminrec.php">

                            <div class="form-group col-md-12">
                                <label for="fullname"> Full Name:</label>
                                <input type="text" name="fullname" id="fullname" class="form-control"
                                       value="<?php if(isset($fullname)) echo "$fullname"; ?>"
                                       placeholder="Enter fullname" required>
                                <p><?php if(isset($error['fullname'])) echo $error['fullname'];?></p>
                                <p><?php if(isset($error['fullname1'])) echo $error['fullname1'];?></p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username"> User Name:</label>
                                <input type="text" name="username" id="username" class="form-control"
                                       value="<?php if(isset($username)) echo "$username"; ?>"
                                       placeholder="Enter username" required>
                                <p><?php if(isset($error['username'])) echo $error['username'];?></p>
                                <p><?php if(isset($error['username1'])) echo $error['username1'];?></p>
                            </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email"> E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control"
                               value="<?php if(isset($email)) echo "$email"; ?>"
                               placeholder="Enter e-mail">
                        <p><?php if(isset($error['email'])) echo $error['email'];?></p>
                        <p><?php if(isset($error['email1'])) echo $error['email1'];?></p>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password"> Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        <p><?php if(isset($error['password'])) echo $error['password'];?></p>
                        <p><?php if(isset($error['password1'])) echo $error['password1'];?></p>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="c_password"> Confirm Password:</label>
                        <input type="password" name="c_password" id="c_password" class="form-control"
                               placeholder="Confirm Password">
                        <p><?php if(isset($error['c_password'])) echo $error['c_password'];?></p>
                        <p><?php if(isset($error['c_password1'])) echo $error['c_password1'];?></p>
                    </div>
                    <div class="form-group col-md-3">

                        <label for="role"> Roles:</label>
                        <select class="form-control" name="role">
                            <option value="admin"> Administrator</option>
                            <option value="sec"> Secretary</option>
                            <option value="fo"> Finance Officer</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <div class="btn-group pull-right">
                            <input class="btn btn-success" type="submit" name="submit" value="ADD" id="submit">
                        </div>
                    </div>

                    </form>

                </div>
</body>
</html>