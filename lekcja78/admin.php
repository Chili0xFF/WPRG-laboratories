<?php 
include_once 'connect.php';?>
<html>
    <head>
    </head>
    <body>
    <?php 
    session_start();
    echo "<a href='logout.php'>logout</a>";
    if(!isset($_SESSION['id_log'])){
        echo "
        <form action='login.php' method='post'>
        <label>Login: </label><input type='text' name='login'>
        <label>Password: </label><input type='password' name='password'>
        <input type='submit' value='loguj'>
        </form>
        ";
    }
    else{
        $login = $_SESSION['id_log'];
        $query = "SELECT * FROM samochody INNER JOIN uzytkownicy ON samochody.uzytkownik_id=uzytkownicy.id WHERE uzytkownicy.id='$login';";
        $result = mysqli_query($db_connect,$query);
        echo "<table><tr><th>ID</th><th>Marka</th><th>Model</th><th>Cena</th><th>Rocznik</th><th>Opis</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                $id=$row['ID'];
                echo "<td>".$row['ID']."</td><td>".$row['marka']."</td><td>".$row['model']."</td><td>".$row['cena']."</td><td>".$row['rok']."</td><td>".$row['opis']."</td><td><a href=edycja.php?id=$id>Edytuj</a></td>";
                echo "</tr>";
        }
        echo "</table>";
        }  
        echo "<h2>Dodaj nowy samochodzik: </h2>
        <form action=add.php method=post>
        Marka: <input type=text name=marka><br>
        Model: <input type=text name=model><br>
        Cena: <input type=number min=1 step=0.1 name=cena><br>
        Rocznik: <input type=number min=1900 step=1 name=rok><br>
        Opis: <input type=text name=Opis><br>
        <input type=submit value=dodaj></form>
        
        ";

    
    ?>
    </body>
</html>
