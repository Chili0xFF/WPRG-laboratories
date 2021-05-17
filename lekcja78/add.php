<?php
include_once 'connect.php';
session_start();
if(isset($_POST['marka'])){
$ID=$_SESSION['id_log'];
$marka=$_POST['marka'];
$model=$_POST['model'];
$cena=$_POST['cena'];
$rocznik=$_POST['rok'];
$opis=$_POST['Opis'];
$query = "INSERT INTO samochody(uzytkownik_id,marka,model,cena,rok,opis) VALUES('$ID','$marka','$model','$cena','$rocznik','$opis')";
mysqli_query($db_connect,$query);
}

header("Location: admin.php");
?>