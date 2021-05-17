<?php
include_once 'connect.php';
session_start();
if(isset($_POST['marka'])){
    $marka= $_POST['marka'];
    $model= $_POST['model'];
    $cena= $_POST['cena'];
    $rok= $_POST['rok'];
    $opis= $_POST['opis'];
    $edit_car = $_SESSION['edit_car'];

    $query="UPDATE samochody SET marka='$marka' WHERE id='$edit_car'";
    $query2="UPDATE samochody SET model='$model' WHERE id='$edit_car'";
    $query3="UPDATE samochody SET cena='$cena' WHERE id='$edit_car'";
    $query4="UPDATE samochody SET rok='$rok' WHERE id='$edit_car'";
    $query5="UPDATE samochody SET opis='$opis' WHERE id='$edit_car'";
    mysqli_query($db_connect,$query);
    mysqli_query($db_connect,$query2);
    mysqli_query($db_connect,$query3);
    mysqli_query($db_connect,$query4);
    mysqli_query($db_connect,$query5);
}
header("Location: admin.php");

?>