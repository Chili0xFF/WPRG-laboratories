<?php
$countries = array(
            "Niemcy" => 1,
            "Polska" => 2,
            "Francja" => 3,
            "Chad" => 4
        );
if($_POST['sent']?? "" != null){
    $date1 = strtotime($_POST['dateFrom']);
    $date2 = strtotime($_POST['dateTo']);
    $date = 0;
    $result = 0;
    $personCount = $_POST['personCount'];
    $country = $_POST['country'];
    if($date1<$date2){
        $date = ($date2 - $date1) / 86400;
        
        $result = $personCount*$date*$countries[$country];
        echo "Cena to: ".$result."zloty";
        
    }
    else {
        echo "blad";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method=post action="zad4_3.php">
        <input type="date" required name='dateFrom'>
            <br/>
        <input type="date" required name='dateTo'>
            <br/>
        liczba osob: 
        <input type="number" step='1' required name='personCount'>
        kraj:
        <input list="countries" name="country" required>
        <datalist id="countries">
        <?php foreach ($countries as $key => $val) {
            echo '<option value="'.$key.'">';
        }
        ?>
        </datalist>
        <input type=submit value="sprawdz" name="sent">
    </form>
</body>
</html>