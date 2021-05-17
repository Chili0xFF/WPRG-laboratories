<?php session_start();
if(!isset($_SESSION['runda']))
{   
    $_SESSION['runda']=1;
    $_SESSION['pola'] = [
    ['1','2','3'],
    ['4','5','6'],
    ['7','8','9']
    ];
    $_SESSION['error']='';
}
$guzik='';
?>

<html>
    <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Ranchers&display=swap" rel="stylesheet">
    <style>
        #reset{
            margin-left: auto;
            margin-right: auto;
        }
        .gz_pl{
        height: 100px;
        width: 100px;
        border: black solid 1px;
        font-size: 40px;
        }
        
        #okienko_main{
        
        height: 500px;
        width: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        }
        #panel_gorny{
        
        background-color: rgba(115, 245, 158,1);
        border: black solid 1px;
        height: 30%;
        width: 100%;
        font-size: 55px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px 15px 0 0;
        }
        #panel_dolny{
        font-family: 'Pangolin', cursive;
        border: black solid 1px;
        height: 70%;
        width: 100%;
        border-radius: 0 0 15px 15px;
        background-color: rgba(199, 209, 217,1);
        }
        #pole00{border-radius: 15px 0 0 0;}
        #pole02{border-radius: 0 15px 0 0}
        #pole22{border-radius: 0 0 15px 0;}
        #pole20{border-radius: 0 0 0 15px}
        #plansza{
        margin-left: 6%;
        margin-right: 6%;
        margin-top: 15px;
        margin-right: 15px;
        }
        .gz_pl:hover{
        background-color:grey;
        }
        #invisible{display: none;
            margin-right: auto;
        margin-top: auto;
        margin-left: auto;
        margin-bottom: auto;
        width: 350px;
        height: 450px;
        }
    </style>
    </head>
    <body>
    <div id="invisible"></div>
    <form action="" method="get">
    <?php 

    
    if(isset($_GET['guziczek'])){
        if($_SESSION['runda']%2==1)$gracz='x';
        else $gracz='o';
        $guzik=$_GET['guziczek'];
        if(is_numeric($guzik))
        {
            $_SESSION['runda']++;
            $_SESSION['error']='';
            if($_SESSION['runda']>9){
                $_SESSION['error']="REMIS";
                echo "<style>#invisible{display: block; position: absolute;}</style>";
            }
            if($_SESSION['error']=='END')$_SESSION['error']='';
            if($guzik<4){
                $_SESSION['pola'][0][($guzik-1)%3]=$gracz;
             }
             else if($guzik<7){
                 $_SESSION['pola'][1][($guzik-1)%3]=$gracz;
             }
             else if($guzik<10){
                 $_SESSION['pola'][2][($guzik-1)%3]=$gracz;
             }
        }
        else
        {
            $_SESSION['error']="WYBRAŁEŚ ZAJĘTE PRZEZ KOGOŚ POLE! WYBIERZ INNE!";
        }
    }
    
    ?>
    <div id='okienko_main'>
    <div id='panel_gorny'>
    <?php
    echo "Runda: ".$_SESSION['runda']." <br>";
    $i=0;
    echo "</div><div id='panel_dolny'><div id='plansza'>";
    foreach ($_SESSION['pola'] as $rzad) {
        $j=0;
        foreach ($rzad as $pole) {
            echo "<input type='submit' class='gz_pl' id='pole$i$j' name='guziczek' value='$pole'>";
            $j++;
        }
        echo "<br>";
        $i++;
    }
    echo "</div>";
    if(isset($_SESSION['error']))echo "<div id='error'>".$_SESSION['error']."</div>";
    
    
    if(spr_win($_SESSION['pola'][0][0],$_SESSION['pola'][0][1],$_SESSION['pola'][0][2]))win(0,0,0,1,0,2);
    if(spr_win($_SESSION['pola'][1][0],$_SESSION['pola'][1][1],$_SESSION['pola'][1][2]))win(1,0,1,1,1,2);
    if(spr_win($_SESSION['pola'][2][0],$_SESSION['pola'][2][1],$_SESSION['pola'][2][2]))win(2,0,2,1,2,2);
    if(spr_win($_SESSION['pola'][0][0],$_SESSION['pola'][1][0],$_SESSION['pola'][2][0]))win(0,0,1,0,2,0);
    if(spr_win($_SESSION['pola'][0][1],$_SESSION['pola'][1][1],$_SESSION['pola'][2][1]))win(0,1,1,1,2,1);
    if(spr_win($_SESSION['pola'][0][2],$_SESSION['pola'][1][2],$_SESSION['pola'][2][2]))win(0,2,1,2,2,2);
    if(spr_win($_SESSION['pola'][0][0],$_SESSION['pola'][1][1],$_SESSION['pola'][2][2]))win(0,0,1,1,2,2);
    if(spr_win($_SESSION['pola'][0][2],$_SESSION['pola'][1][1],$_SESSION['pola'][2][0]))win(0,2,1,1,2,0);
    function spr_win($a,$b,$c){
        if($a==$b && $b==$c){
            return true;
        }
        else return false;
    }
    function win($aa1,$aa2,$bb1,$bb2,$cc1,$cc2){
        if($_SESSION['runda']%2==0){$gracz='x'; $color='red';}
        else {$gracz='o'; $color='blue';}
        $_SESSION['runda']='';
        echo "WYGRAŁ GRACZ: $gracz";
        echo "<style>#pole$aa1$aa2{background-color: $color;}#pole$bb1$bb2{background-color: $color;}#pole$cc1$cc2{background-color: $color;}#invisible{display: block; position: absolute;}</style>";
    }
    ?>

    </form>

    
    </div>    <div id='reset'><form action="reset.php"><input type="submit" value="reset"></form></div>
</div>
    </body>
</html>