<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DOMICA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
              <img src="img/logo.svg" alt="logo">

            </div><br />
            <h3>Welkom bij Domica</h3>
            <form class="m-t" role="form" action="inc/login.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam" required="true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required="true">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="login">Login</button>

            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
