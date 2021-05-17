<?php 
    function oblicz($rodzaj, $ilosc, $dodatki)
    {
        include 'dane.php';
        $cena_addon=0;
        $cena_main = $rodzaj_cennik[$rodzaj];
        
        foreach ($dodatki as $value) {
            $cena_addon+=$dodatki_cennik[$value];
        }
        return $cena_main*$ilosc+$cena_addon;
    }
    function dodaj($a){
        if(isset($_SESSION['koszyk'])){
                for($i=0;$i<sizeof($_SESSION['koszyk']);$i++) {
                        if($_SESSION['koszyk'][$i][0]==$a){
                            $_SESSION['koszyk'][$i][1]+=1;
                            return;
                        }
                }
                $i=sizeof($_SESSION['koszyk']);
                $_SESSION['koszyk'][$i][0]=$a;
                $_SESSION['koszyk'][$i][1]=1;
        }
        else $i=0;
        $_SESSION['koszyk'][$i][0]=$a;
        $_SESSION['koszyk'][$i][1]=1;
    }
    function wyczysc(){
        session_unset();
    }
    function usun($a){
        for($i=0;$i<sizeof($_SESSION['koszyk']);$i++){
            if($_SESSION['koszyk'][$i][0]==$a){
                for(;$i<sizeof($_SESSION['koszyk'])-1;$i++){
                    $_SESSION['koszyk'][$i]=$_SESSION['koszyk'][$i+1];
                }
                unset($_SESSION['koszyk'][$i]);
                return;
            }
        }
    }
?>