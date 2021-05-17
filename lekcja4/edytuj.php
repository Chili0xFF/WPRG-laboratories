<?php 
    $dane = fopen('dane2.csv',"r");
    $i=0;
    while(!feof($dane)){
        $tab_re[$i] = fgetcsv($dane);
        //echo var_dump($tab_re[$i])."<br>";
        $i++;
    }
    if(isset($_POST['country'])){
        $dec = $_POST['country'];
        $tresc = $_POST['nowa_tresc'];
        $edit = fopen('dane2.csv','w');
        for($i=0;$i<sizeof($tab_re);$i++){
            if(in_array($dec,$tab_re[$i])){
                $tab_re[$i][2]=$tresc;
            }
            //foreach($tab_re[$i] as $key => $value)
            //{   
                ///w tym dopisuj kolejne fragmenty stryinga
                $stringel = $tab_re[$i][0].",".$tab_re[$i][1].",".$tab_re[$i][2];
                fwrite($edit,$stringel);
                if($i<sizeof($tab_re)-1)fwrite($edit,"\n");
            //}
        }
        header("Location: index3.php");
    }
?>

<html>
    <head>
    </head>
    <body>
    <?php 
    ?>

        <form action="" method='post'>
        <input list="countries" name="country" required>
        <datalist id="countries">
        <?php for($j=1;$j<sizeof($tab_re);$j++){
            echo '<option value="'.$tab_re[$j][0].'">';
        }
        ?>
        </datalist>
        <input type="text" name="nowa_tresc">
        <input type="submit">
        </form>
    </body>
</html>
 