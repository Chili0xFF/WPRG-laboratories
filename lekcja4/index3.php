<?php
    $dane = fopen('dane2.csv',"r+");
    $i=0;
    while(!feof($dane)){
        $tab_re[$i] = fgetcsv($dane);
        $i++;
    }
    //for($i=1;$i<sizeof($tab_re);$i++){
    //    for($j=0;$j<sizeof($tab_re[$i]);$j++){
    //        $tab1[$j][$i]=$tab_re[$i][$j];
    //    }
    //}
    //echo var_dump($tab_re[0])."<br>";
    //echo var_dump($tab_re[1])."<br>";
    
?>
<html>
<head>
 

</head>
<body>
    <?php
    for($i=1;$i<sizeof($tab_re);$i++){
        foreach ($tab_re[$i] as $key => $value) {
            if($key=='name')echo "<a href='index3.php?a=".$tab_re[$i][1]."'>".$value."</a>   ";
        }
    }
    if(isset($_GET['a'])){
    for($i=0;$i<sizeof($tab_re);$i++){
        if(in_array($_GET['a'],$tab_re[$i])){
            echo "<br><h1>".$tab_re[$i][0]."</h1><br>".$tab_re[$i][2];
            break;
        }
    }
    }
    ?>
    <form action="edytuj.php">
        <input type="submit" value="edytuj">
    </form>
</body>
</html>

<?php 
fclose($dane);?>