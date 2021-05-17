<html>
<head>
</head>
<body>
    <?php
        function kostka(){
            return rand(1,6);
        }
        function kolo($promien){
            return $promien*2;
        }
        function cenzura(&$subject){
            $arrayyyy=array("dupa","domek","dom");
            $subject = str_replace($arrayyyy,'*',$subject);
        }
        function peselowe($pesel){
            $rok = substr($pesel,0,2);
            $miesiac = substr($pesel,2,2);
            $dzien = substr($pesel,4,2);
            if($miesiac>12){
                
                $miesiac-=20;
            }
            
            return $dzien."-".$miesiac."-".$rok;
        }
        echo "Wynik rzutu kostką: ".kostka();
        echo "<br>Średnica koła: ".kolo(4);
        $subject="domek kotek dom";
        echo "<br>Przed cenzurą:".$subject;
        cenzura($subject);
        echo "<br>Po cenzurze: ".$subject;
        echo "Data urodzenia: ".peselowe("00322301391");
            $zm1="kwadrat";
            echo "<form action='index.php' method='POST'>";
            switch ($zm1) {
                case 'trojkat':
                   echo  "bok: <input type='number' name='bok'> <br>wysokosc: <input type='number' name='wysokosc'>";
                   trojkat();
                   break;
                case 'kwadrat':
                    echo "bok: <input type='number' name='bok'>";
                    kwadrat();
                    break;
                case 'kolo':
                    echo "<input type='number' name='promien'>";
                    kolo2();
                    break;
        }
        echo "<input type='submit'> </form>";
        function trojkat(){
            $bok=$_POST['bok'];
            $wysokosc=$_POST['wysokosc']; 
            echo $bok*$wysokosc;
        }
        function kwadrat(){
            $bok=$_POST['bok'];
            echo pow($bok,2);
        }
        function kolo2(){
            $promien=$_POST['promien'];
            echo 2*pi()*pow($promien,2);
        }
        ?>
</body>