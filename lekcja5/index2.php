<?php 
    session_start();
    $dane = fopen("products.csv","r+");
    $i=0;
    while(!feof($dane)){
        $products[$i] = fgetcsv($dane);
        $i++;
    }
    foreach ($products as $value) {
        if($value[0]!="nazwa")echo $value[0]."<a href=index2.php?a=app&b=".$value[0].">dodaj do koszyka</a><br>";
    }
    include_once 'funkcje.php';
    if(isset($_GET['a'])){
        switch($_GET['a']){
            case 'app':
                dodaj($_GET['b']);
                break;
            case 'del':
                usun($_GET['b']);
                break;
            case 'clear':
                wyczysc();
                break;
        }
    }
?>
<html>
    <head>
    </head>
    <body>
    <h2>Koszyk:</h2> <a href="index2.php?a=clear">Wyczyść</a><br>
    <?php 
        if(isset($_SESSION['koszyk'])){
        foreach ($_SESSION['koszyk'] as $value2) {
                if($value2[0]!="nazwa")echo $value2[0]." ".$value2[1]." <a href=index2.php?a=del&b=".$value2[0].">usun z koszyka</a><br>";
        }}
        //var_dump($_SESSION['koszyk'][1]);
    ?>

    </body>
</html>