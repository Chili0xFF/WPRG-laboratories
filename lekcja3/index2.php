<?php
$tab1=array(
    array('name'=>'O nas', 'link'=>'onas','tresc'=>"Jesteśmy firmą"),
    array('name'=>'Kontakt', 'link'=>'kontakt','tresc'=>"692256496493"),
    array('name'=>'Menu', 'link'=>'help','tresc'=>"help me"),
    array('name'=>'Podstrona4', 'link'=>'china','tresc'=>"i'm kept hostage at chinese soup factory")
);
?>
<html>
<head>


</head>
<body>
    <?php
    for($i=0;$i<sizeof($tab1);$i++){
        foreach ($tab1[$i] as $key => $value) {
            if($key=='name')echo "<a href='index2.php?a=".$tab1[$i]['link']."'>".$value."</a>   ";
        }
    }
    if(isset($_GET['a'])){
    for($i=0;$i<sizeof($tab1);$i++){
        if(in_array($_GET['a'],$tab1[$i])){
            echo "<br><h1>".$tab1[$i]['name']."</h1><br>".$tab1[$i]['tresc'];
            break;
        }
    }
    }
    ?>

</body>
</html>

