<?php 
    $host="localhost";
    $db_user="root";
    $db_password="";
    $db_name="wprg_baz1";
    if(!$db_connect=mysqli_connect($host,$db_user,$db_password,$db_name))
    {
        echo "Error! Nie połączono z serwerem";
    }
?>

