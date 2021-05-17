<?php 
        include_once 'functions.php';
        $c=" ";
        if(isset($_GET['test']))
        {$a=$_GET['a'];
        $b=$_GET['b'];
        $dzialanie=$_GET['dzialanie'];
        
        switch ($dzialanie) {
            case '1':
                $c=dodawanie($a,$b);
                break;
            case '2':
                $c=odejmowanie($a,$b);
                break;
            case '3':
                $c=mnozenie($a,$b);
                break;
            case '4':
                if($b!=0)$c=dzielenie($a,$b);
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

    <form action='index1.php' method='get'>
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