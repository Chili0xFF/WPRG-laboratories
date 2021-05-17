<html>
    <head>
    </head>
    <body>
    <?php 
        include_once 'connect.php';
        if(isset($_GET['id']))
        {
            $ID=$_GET['id'];
            $query="SELECT * FROM samochody WHERE id=$ID";
            $result = mysqli_query($db_connect,$query);
            echo "<table><tr><th>Marka</th><th>Model</th><th>Cena</th><th>Rocznik</th><th>Opis:</th></tr>";
            echo "<tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<td>".$row['marka']."</td><td>".$row['model']."</td><td>".$row['cena']."</td><td>".$row['rok']."</td><td>".$row['opis']."</td>";
            }
            echo "</tr></table>";
            echo "<form action=index1.php><input type=submit value=powrot></form>";
            }
    ?>
    </body>
</html>