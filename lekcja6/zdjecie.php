<html>
    <head>
    <style>body{background-color: black;color: grey;}</style>  <?php //darkmode ponieważ szanuję Pana i swoje oczy?>
    </head>
    <body>
    <?php $imgdir = "./img/";
    $dir=scandir($imgdir);         //ponownie, kulturalnie ustawiam directory, przeskakuje . ..
    array_shift($dir);
    array_shift($dir);
    if(isset($_GET['imgid'])){
        $imgID = $_GET['imgid'];                                              //przechwytuje imgID
        if($imgID<0||$imgID>count($dir)) $imgID=0;                            //default=0 w razie jakby śmieszek ustawił ręcznie wartość spoza zakresu                                  
    }                                                                         
    else $imgID=0;                          //w razie jakby ktoś nie ustawił żadnej wartości, też wejdzie w default aby nie wysypywało się bez sensu
    echo "<img src='img/$dir[$imgID]'>";     

    echo "<a href=zdjecie.php?imgid=";    ///od tego momentu generujemy guziczki
    if($imgID==0){echo count($dir)-1;}              ///upewniam się aby nie wyszło na -1
    else{echo $imgID-1;}                      
    echo ">POPRZEDNIE</a>   ";
    echo "<a href=index1.php>POWROT</a>  ";
    echo "<a href=zdjecie.php?imgid=";    
    if($imgID==count($dir)-1){echo "0";}               ///upewniam się aby nie wyszło poza zakresik
    else{echo $imgID+1;}                               //nawet gdy jest więcej niż 10
    echo ">KOLEJNE</a>"
?>
    </body>
</html>