<?php 
    session_start();
    $tab1=array(
        array('login'=>'admin','pass'=>'admin'),
        array('login'=>'tester','pass'=>'tester')
    );
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    $flag=0;
    echo sizeof($tab1);
    for($i=0;$i<sizeof($tab1);$i++){
        if(($tab1[$i]['login']==$login)&&($tab1[$i]['pass']==$pass)&&($flag!=1)){
            $_SESSION['login']=$login;
            $_SESSION['pass']=$pass;
            header('Location: index3_panel.php');
            exit();
        }
    }
    $_SESSION['error']="Błąd! Zły login lub hasło!";
    header('Location: index3.php');
    
    ?>