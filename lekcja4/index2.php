<?php
        if(isset($_POST['name']))
        {$dane = fopen('dane.txt','a');
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        fwrite($dane,$name." ".$surname);
        fclose($dane);}
    ?>
<html>
    <head>
    </head>
    <body>
    <form action="index2.php" method="post">
        <input type="text" name="name">
        <input type="text" name="surname">
        <input type="submit">
        </form>
    
    </body>
</html>