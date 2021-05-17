<html>
<head>
<style>
table{
    border: 2px solid black;
    border-collapse: collapse;
}
td{
    border: 2px solid black;
    
}
</style>
</head>
<body>
    <?php
        $zmienna=3;
        $map=array("polak"=>"polska","niemiec"=>"niemcy","holender"=>"holandia","francuz"=>"francja");
        $narodowosc="rosja";
        function zad21($zmienna)
        {
            $tab1=array(0,0,0,0);
            foreach ($tab1 as &$key) {
                $key=rand(1,6);
            }
        echo "Wartosc: ".$tab1[$zmienna]."<br>";
        }
        function zad22($map,$narodowosc){
            if(isset($map[$narodowosc]))
            {
                echo $map[$narodowosc]."<br>";
            }
            else{
                echo "Brak danych. <br>";
            }
        }  ////DO TEGO MOMENTU BYŁO SPRAWDZONEEEEEEEEEEE
        function zad31(){
            $tab1=array(0,0,0,0,0,0,0,0,0,0);
            
            foreach ($tab1 as &$key) {
                $key=rand(1,30);
            }
            var_dump($tab1);
            $wynik_for=0;$wynik_while=0;$wynik_do_while=0;$wynik_foreach=0;
            for ($i=0; $i < count($tab1); $i++) { 
                if($wynik_for<$tab1[$i])$wynik_for=$tab1[$i];
            }
            
            $i=0;
            do{
                if($wynik_do_while<$tab1[$i])$wynik_do_while=$tab1[$i];
                $i++;
            }while($i<count($tab1));
            
            $i=0;
            while ($i<count($tab1)) {
                if($wynik_while<$tab1[$i])$wynik_while=$tab1[$i];
                $i++;

            }
            foreach ($tab1 as &$key) {
                
                if($key>$wynik_foreach)$wynik_foreach=$key;
            }
            echo $wynik_do_while."<br>";
            echo $wynik_for."<br>";
            echo $wynik_foreach."<br>";
            echo $wynik_while."<br>";
        }
        function zad32($zmienna){
            $tabzad32=array();
            for ($i=0; $i <$zmienna ; $i++){
                $tabzad32[$i]=rand(1,6);
            }
            return $tabzad32;
        }  
        function zad33($zmienna){
            $tab=array();
            $zmienna++;
            echo "<table>";
            for($i=1;$i<$zmienna;$i++){
                echo "<tr>";
                for($j=1;$j<$zmienna;$j++)
                {
                    $tab[$i][$j]=$i*$j;
                    echo "<td>".$tab[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        function zad34($liczba){
            $iterations=1;
            $flag=true;
            if($liczba<1) return false;
            if($liczba<=3) return true;
            if($liczba%2==0||$liczba%3==0){
                echo "Iteracji: ".$iterations."<br>";
                return false;
            }
            for($i=5;(pow($i,2)<=$liczba)&&($flag==true);$i+=6)
            {
                //var_dump($i); ///usuń komentarz aby pokazać wszystkie dzielniki przez jakie program testował
                $iterations++;
                if($liczba%$i==0||$liczba%($i+2)==0){
                    $flag=false;   ///false == niepierwsza, true==pierwsza
                }
            }
            echo "<br>Iteracji: ".$iterations."<br>";
            return $flag;
        }
        zad21($zmienna);
        zad22($map,$narodowosc);
        echo "<b>Od tego momentu jeszcze nie było sprawdzone:<br><br>Zadanie 3.1:<br></b>";
        zad31();
        echo "<br><b>Zadanie 3.2: </b><br>";
        var_dump(zad32(4));
        echo "<br><b><br>Zadanie 3.3: </b><br>";
        zad33(5);
        echo "<b><br>Zadanie 3.4: </b><br>";
        //for($i=0;$i<1000;$i++){
        //    echo "<br>".$i;
            var_dump(zad34($i));
        //    echo "<br>";
        //}
        ?>
</body>