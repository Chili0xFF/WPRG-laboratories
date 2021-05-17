<html>
    <head>
    </head>
    <body>
    <?php echo "I'm alive! <br>"; 
        $z1=10;
        $z2=6;
        $z3=8;
        if($z3<$z2)
        {
            $b=$z3; 
            $z3=$z2;
            $z2=$b;
        }
        if($z3<$z1)
        {
            $b=$z3;
            $z3=$z1;
            $z1=$b;
        }
        echo pow($z1,2)+pow($z2,2)==pow($z3,2);
    ?>
    </body>
</html>