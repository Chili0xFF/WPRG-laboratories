<?php include_once 'funkcje.php';
include_once 'dane.php';
if(isset($_POST['wyslij'])){
    $main_choice = $_POST['jedzenie'];
    $ilosc = $_POST['ilosc'];
    $i=0;
    //var_dump($_POST['dodatek']);
    foreach ($_POST['dodatek'] as $value){
        $main_addon[$i]=$value;
        $i++;
        //echo $value;
    }
    //var_dump($main_addon);
    $kwota =  oblicz($main_choice,$ilosc,$main_addon);
}
?>
<html>
    <head>
    </head>
    <body>
    <form action="index1.php" method='post'>
        <input list="jedzenie" name='jedzenie'>
        <datalist id="jedzenie">
            <?php 
            foreach ($rodzaj_cennik as $key => $value) {
                echo'<option value="'.$key.'">';
            }
            ?>
            </datalist>
            <input type="number" step="1" min="0" name="ilosc">
            <?php 
            foreach ($dodatki_cennik as $key => $value) {
                echo $key.'<input type="checkbox" name="dodatek[]" value="'.$key.'">';
            }
            ?>
        <input type="submit" name="wyslij" value="wyslij">
    </form>
    <?php 
        if(isset($kwota)){
            echo "Musisz zapłacić: $kwota zł";
        }
    ?>
    </body>
</html>