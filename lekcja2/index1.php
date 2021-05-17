<?php 
        $c=" ";
        if(isset($_POST['test']))
        {$a=$_POST['a'];
        $b=$_POST['b'];
        $dzialanie=$_POST['dzialanie'];
        switch ($dzialanie) {
            case '1':
                $c=$a+$b;
                break;
            case '2':
                $c=$a-$b;
                break;
            case '3':
                $c=$a*$b;
                break;
            case '4':
                if($b!=0)$c=$a/$b;
                else $c="ERROR! NIE DZIELIMY PRZEZ ZERO!!!";
                break;
            default:
                echo "Exception?".$a.$dzialanie.$b;
                break;
        }}
    
    ?>
<html>
<head>

</head>
<body>

    <form action='index1.php' method='post'>
        <input type="number" name='a'>
        <input type="number" name='b'>
        <input type="radio" id='+' name='dzialanie' value='1'> +
        <input type="radio" id='-' name='dzialanie' value='2'> -
        <input type="radio" id='*' name='dzialanie' value='3'> *
        <input type="radio" id='/' name='dzialanie' value='4'> /
        <input type="submit" value="=" name="test"> 
    </form>
    
    <?php echo $c; ?>

</body>
</html>