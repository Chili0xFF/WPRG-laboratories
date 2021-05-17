<?php session_start();
      if(isset($_SESSION['login'])==false)
      {
        header('Location: index3.php');
      }
    ?>

<html>
    <head>
        </head>
    <body>
        Zalogowano!
        <form action="index3_logout.php">
            <input type="submit" value="wyloguj">
            </form>
        </body>
    </html>