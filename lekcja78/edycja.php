<?php
include_once 'connect.php';
session_start();
if(!isset($_SESSION['id_log'])){
    header("Location: admin.php");
}
?>
<html>
    <head>
    </head>
    <body>
    <?php  
        $ID = $_GET['id'];
        $_SESSION['edit_car']=$ID;
        $id_uzytk = $_SESSION['id_log'];
        $query="SELECT * FROM samochody WHERE id=$ID";
            $result = mysqli_query($db_connect,$query);
            echo "<form action='edit_car.php' method='post'>";
            echo "<table><tr><th>Marka</th><th>Model</th><th>Cena</th><th>Rocznik</th><th>Opis:</th></tr>";
            echo "<tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                <td><input type='text' value='".$row['marka']."' name='marka'></td>
                <td><input type='text' value='".$row['model']."' name='model'></td>
                <td><input type='text' value='".$row['cena']."' name='cena'></td>
                <td><input type='text' value='".$row['rok']."' name='rok'></td>
                <td><input type='text' value='".$row['opis']."' name='opis'></td>
                ";
            }
            echo "</tr></table>
            <input type='submit' value='Edytuj'>
            </form>";
    ?>
    </body>
</html>