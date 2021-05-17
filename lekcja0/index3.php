<html>
    <head>
    </head>
    <body>
    <form action="index3.php" method="post">
        <input type='number' name="zmienna1">
        <input type='number' name="zmienna2">
        <input type='number' name="zmienna3">
        <input type='number' name="zmienna4">
        <input type='submit'>
    </form>
    <?php
        $z1=$_POST['zmienna1'];
        $z2=$_POST['zmienna2'];
        $z3=$_POST['zmienna3'];
        $z4=$_POST['zmienna4'];

        //swapping
        $b=$z1;
        $z1=$z2;
        $z2=$b;

        $w=0;
        $w+=$z1;
        echo $w."<br>";
        $w+=$z2;
        echo $w."<br>";
        $w+=$z3;
        echo $w."<br>";
        $w+=$z4;
        echo $w."<br>";
    ?>
    </body>
</html>