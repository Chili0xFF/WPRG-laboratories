<html>
    <head>
    </head>
    <body>
    <form action="index2.php" method="post">
        <input type='text' name="kraj">
        <input type='submit'>
    </form>
    <?php
        $kraj=$_POST['kraj'];
        switch($kraj){
            case 'polska':
                echo 'polak';
                break;
            case 'niemcy':
                echo 'niemiec';
                break;
            case 'węgry':
                echo 'węgier';
                break;
        }
    ?>
    </body>
</html>