<?php $tab1=array("Polska"=>4,"Nederlandy"=>10,"Niemcy"=>5,"Holandia"=>6,"Francja"=>7);
if(isset($_POST['wyslij'])){
        $wynik=" ";
        
        $date_a=strtotime($_POST['data_start']);
        $date_b=strtotime($_POST['data_end']);
        $ilosc=$_POST['osoby'];
        $kraj=$_POST['kraj'];
        if($date_a<$date_b){
            $date_a=($date_b-$date_a)/60/60/24;
            $wynik=$date_a*$ilosc*$tab1[$kraj];
        }
        else $wynik="Error! Złe daty!";
        }
    ?>

<html5>
<head>

</head>
<body>
    <form action="index3.php" method="post">
        Data start<input type="date" required name='data_start'>
        Data koniec<input type="date" required name='data_end'>
        Ilość osób<input type="number" name='osoby' min='1' step='1' required>
        Wybór krajów:<input list="kraje" name="kraj" required>
        <datalist id="kraje">
        <?php foreach ($tab1 as $klucz => $zmienna33) {
            echo '<option value="'.$klucz.'">';
        }
        ?>
        </datalist>
        <input type="submit" value="sprawdź" name='wyslij'>
    </form>
    <?php echo $wynik;?>
</body>
</html>