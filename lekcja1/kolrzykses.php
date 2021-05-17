<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Ranchers&display=swap" rel="stylesheet"><?php session_start();
    error_reporting(0);      //Wyłączam raportowanie błędów, bo jest sporo zmiennych które deklarują się dopiero po rozpoczęciu gry.
    if(isset($_SESSION['runda'])!=true)
    {
        $_SESSION['runda']==0; //nieparzyste == gracz 1; parzyste == gracz2;
        $_SESSION['wybor']==0; //wartosci od 1-9, odpowiadają odpowiednim pozycjom na mapie
        for ($i=1;$i<10;$i++){
                $_SESSION['pole'][$i]=$i;
        }
    }
    ?>
    
    <style>
    #gui{
        font-family: 'Ranchers', cursive;
        font-size: 44px;
        padding-left: 15px;
        background-color: rgba(115, 245, 158,1);
        width: 385px;
        border-radius: 15px 15px 0 0;
        }
    #dolnegui{
        font-family: 'Pangolin', cursive;
        padding-top: 15px;
        width: 400px;
        background-color: rgba(199, 209, 217,1);
        display: flex;
        justify-content: center;
        padding-bottom: 15px;
        border-radius: 0 0 15px 15px;
    }
    #guziki{
        margin-left: 15px;
    }
    .box:hover{
        background-color: grey;
        }
    table{
        border-collapse: collapse;
        font-size: 44px;
        }
    td{
        width: 44px;
        height: 44px;
        text-align: center;
        border: 2px solid black;
        }
    .error{
        position: absolute; 
        top: 45%;
        left: 45%;
        background: grey;
        width: 300px;
        height: 100px;
        color: red;
        border-radius: 15px;
        text-align: center;
        padding: 30px;
        }
    
    </style>
</head>
<body>
    <?php 
    $_SESSION['runda']+=1;  ///Licznik która runda. Od tego zależy który gracz


    $zmienna=$_POST['wybor']; //przyjmuje pole
    if(($_SESSION['pole'][$zmienna]=='x')||($_SESSION['pole'][$zmienna]=='o')){                //Jeśli wybrane pole jest zajęte, wyświetla błąd
        $_SESSION['err1']="Podaj pole które nie jest zajęte, oraz mieści się w zakresie 1-9!";
    }
    else{
        $_SESSION['err1']="<style>.error{display: none;}</style>";
        if($_SESSION['runda']%2==1)$_SESSION['pole'][$zmienna]='o'; //jeśli nie jest zajęte, to na wybranym polu stawia odpowiedni znak
        else $_SESSION['pole'][$zmienna]='x';
    }


    
    echo "<div id='gui'>Runda: ".$_SESSION['runda']. "   Gracz: ".($_SESSION[$runda]%2+1)."</div>"; ///Wyświetlanie rundy+gracza


    echo "<div id='dolnegui'><div id='plansza'><table><tr>";                     ///wyświetlanie planszy
    for ($i=1;$i<10;$i++){
        echo "<td class='box' id='pole".$i."'>".$_SESSION['pole'][$i]."</td>";
        if($i%3==0){
            echo "</tr><tr>";
        }
    }
    echo "</table></div>";

    if(spr_wgr($_SESSION['pole'][1],$_SESSION['pole'][2],$_SESSION['pole'][3]))wgr(1,2,3);
    if(spr_wgr($_SESSION['pole'][4],$_SESSION['pole'][5],$_SESSION['pole'][6]))wgr(4,5,6);
    if(spr_wgr($_SESSION['pole'][7],$_SESSION['pole'][8],$_SESSION['pole'][9]))wgr(7,8,9);
    if(spr_wgr($_SESSION['pole'][1],$_SESSION['pole'][4],$_SESSION['pole'][7]))wgr(1,4,7);
    if(spr_wgr($_SESSION['pole'][2],$_SESSION['pole'][5],$_SESSION['pole'][8]))wgr(2,5,8);
    if(spr_wgr($_SESSION['pole'][3],$_SESSION['pole'][6],$_SESSION['pole'][9]))wgr(3,6,9);
    if(spr_wgr($_SESSION['pole'][1],$_SESSION['pole'][5],$_SESSION['pole'][9]))wgr(1,5,9);
    if(spr_wgr($_SESSION['pole'][3],$_SESSION['pole'][5],$_SESSION['pole'][7]))wgr(3,5,7);
        ?>


    <div id='guziki'>
    <form action="kolrzykses.php" method='post'>
        <input type="number" min='1' max='9' name=wybor required>
        <input type="submit" value="Wyślij"><?php echo "<div class='error'>".$_SESSION['err1']."</div>"; ///a ten mały bloczek jest od wyświetlania erroru :>?>
    </form>   
    <form action="resetsession.php">
        <input type="submit" value="reset">
        </form>
    </div>
    </div>
    <?php 
    
    function spr_wgr($a,$b,$c){
        if(($a==$b)&&($b==$c)) return true;
        else return false;
    }

    function wgr($a,$b,$c){
    echo 'Wygrywa gracz:'.($_SESSION[$runda]%2+1).'<br><br><br><form action="resetsession.php"><input type="submit" value="Jeszcze raz?"></form>';
    echo '<style>#pole'.$a.'{background-color: rgb(97, 235, 52);}';
    echo '#pole'.$b.'{background-color: rgb(97, 235, 52);}';
    echo '#pole'.$c.'{background-color: rgb(97, 235, 52);}</style>';
    exit();}
    ?>
</body>
</html>