<?php
include_once 'connect.php';
?>
<html>
    <head>
    </head>
    <body>
    <?php 
        echo "<a href='admin.php'>Zad3</a>";
        if(isset($_GET['page']))$page=$_GET['page'];
        else $page=1;
        if(!isset($_SESSION['records_max'])){
            $query = 'SELECT COUNT(id) FROM samochody';
            $result = mysqli_query($db_connect,$query);
            $result = mysqli_fetch_row($result);
            $_SESSION['record_max'] = $result[0];
        }
        $page_min=($page-1)*5;
        $query = 'SELECT * FROM samochody ORDER BY ID LIMIT '.$page_min.',5';
        $result = mysqli_query($db_connect,$query);
        echo "<table><tr><th>ID</th><th>Marka</th><th>Model</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                $id=$row['ID'];
                echo "<td>".$row['ID']."</td><td>".$row['marka']."</td><td>".$row['model']."</td><td><a href=samochod.php?id=$id>czytaj więcej</a></td>";
                echo "</tr>";
        }
        echo "</table>";
        if($page>1)echo "<a href=index1.php?page=".($page-1).">POPRZEDNIA STRONA</a>&nbsp&nbsp&nbsp";
        if($page*5<$_SESSION['record_max'])echo "<a href=index1.php?page=".($page+1).">NASTĘPNA STRONA</a>";
    ?>
    </body>
</html>