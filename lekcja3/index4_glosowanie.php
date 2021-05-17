<?php 
session_start();
        if(isset($_COOKIE['ex3']))
        {
            $czas=$_COOKIE['expires']-time();
            $_SESSION['error']="Błąd! Już głosowałeś! Wybrałeś: ".$_COOKIE['ex3']." Będziesz mógł ponownie zagłosować za: ".$czas;
            header('Location: index4.php');
            exit();
        }
        else{
            setcookie('ex3',$_POST['wybor'],time()+10);
            setcookie('expires',time()+10,time()+10);
            $_SESSION['error']="Zagłosowano na: ".$_POST['wybor'];
            header('Location: index4.php');
            exit();
        }
    ?> 