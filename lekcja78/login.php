<?php
    session_start();
    include_once 'connect.php';
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $query = "SELECT id FROM uzytkownicy WHERE login='$login' AND haslo='$pass';";
        $result = mysqli_query($db_connect,$query);
        $number=$result->num_rows;
        if($number!=0)
        {
            $result = mysqli_fetch_row($result);
            $_SESSION['id_log']=$result[0];
        }
        header("Location: admin.php");
    }

?>