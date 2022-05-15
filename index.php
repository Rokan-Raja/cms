<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="loginBox"> <img class="user" src="2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form id="frm">
            <div class="inputBox">
                <input id="uname" class="mb-2" type="text" name="id" placeholder="User Id">
                <div id="form-user"style="margin-left: 20px;" class="mb-2 text-danger"></div>
                <input id="pass" type="password" name="pw" placeholder="Password">
                <div id="form-pw" style="margin-left: 20px;" class="mb-2 text-danger"></div>
            </div> <input type="button" id="submit" name="submit" value="Login">
        </form>
        <a href="forget_log.php">Forget Password<br> </a>
    </div>
    <script src="jquery/jquery.js"></script>
    <script>
        $('#submit').click(function() {
            $.ajax({
                type: "post",
                url: "log/log.php",
                data: $('#frm').serialize(),
                success: function(response) {
                    if (response == "admin") {
                        $('#form-user').html('');
                        $('#form-pw').html('');
                        window.location.href = "home.php";
                    }
                    if (response == "contractor") {
                        $('#form-user').html('');
                        $('#form-pw').html('');
                        window.location.href = "emp.php";
                    }
                    else {
                        $('#form-user').html('Invaild Id !!!');
                        $('#form-pw').html('Invaild Password !!!');
                    }
                }
            });
        });
    </script>
</body>

</html>