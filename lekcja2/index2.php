<html>
<head>

</head>
<body>
    <form action='index2.php' method='post'>
        <input type="number" min='1' step='1' name='pierwsza?'>
        <input type="submit">
    </form>
    <?php 
        function pierwsza($liczba){
            $iterations=1;
            $flag=true;
            if($liczba<1) return false;
            if($liczba<=3) return true;
            if($liczba%2==0||$liczba%3==0){
                echo "Iteracji: ".$iterations."<br>";
                return false;
            }
            for($i=5;(pow($i,2)<=$liczba)&&($flag==true);$i+=6)
            {
                //var_dump($i); ///usuń komentarz aby pokazać wszystkie dzielniki przez jakie program testował
                $iterations++;
                if($liczba%$i==0||$liczba%($i+2)==0){
                    $flag=false;   ///false == niepierwsza, true==pierwsza
                }
            }
            echo "<br>Iteracji: ".$iterations."<br>";
            return $flag;
        }

        var_dump(pierwsza($_POST['pierwsza?']));
    ?>
</body>
</html>