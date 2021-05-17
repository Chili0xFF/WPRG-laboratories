<?php session_start();
      if(isset($_SESSION['error'])!=true)$_SESSION['error']=" ";
      if(isset($_SESSION['login']))
      {
        header('Location: index3_panel.php');
        exit();
      }
    ?>

<html>
    <head>
        </head>
    <body>
        <form action="index3_login.php" method="POST">
            Login: <input type="login" name="login">
            <br>Hasło: <input type="pass" name="pass">
            <input type="submit" value ="zaloguj" name="sub1">
            </form>
        <div id=error><?php echo $_SESSION['error']?></div>
        </body>
    </html>