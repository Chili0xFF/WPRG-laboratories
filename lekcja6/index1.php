<html>
    <head>
        <style>body{background-color: black;color: grey;}</style>  <?php //darkmode ponieważ szanuję Pana i swoje oczy?>
    </head>
    <body>
    <?php $imgdir = "./mini/";
    $dir=scandir($imgdir);
    array_shift($dir);         //Tutaj ustawiam ładnie directory i przewijam przez . ..
    array_shift($dir);
    $count = count($dir);       
    if(isset($_GET['page'])){
        $page = $_GET['page'];      //Tutaj przyjmuję page. page 0 to pierwsza strona na potrzeby obliczeń. Da się zmienić na 1, 
    }                               //jednak wymagałoby to niewielkich zmian w linijkach 14,21,22,25
    else $page=0;
    for($i=4*$page;$i<$count&&$i<($page+1)*4;$i++)
    {                                               ///i=4*page ustawia początek od którego wyświetlamy
        echo "<a href=zdjecie.php?imgid=$i>";       ///obydwa warunki są konieczne. count aby kończył gdy jest mniej niż 4
        echo "<img src='mini/$dir[$i]' ";           ///oraz (page+1)*4 gdy są pełne czwórki
        echo "style='height: 100px; width: auto;'></a>";                                
    }
    echo "<br><a href=index1.php?page=";
    if($page==0)echo ceil($count/4)-1;
    else echo ($page-1);              //Tutaj upewniam się że page zawsze będzie w zakresie
    echo ">POPRZEDNIA STRONA</a>   "; ///od 0 do jakiejkolwiek ilości stron. Zaokrąglam w górę, aby wyświetlać niepełne
    echo "<a href=index1.php?page=";  //-1 ze względu na to że zaczynam od page=0
    if($page+1==ceil($count/4))echo $page=0;
    else echo ($page+1);
    echo ">NASTĘPNA STRONA</a>   ";
    ?>
    </body>
</html>