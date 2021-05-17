<?php session_start(); ?>

<html><head></head>
<body>
<form action="index4_glosowanie.php" method="POST">
    Co najpierw?
    <input type="submit" value="mleko" name="wybor">
    <input type="submit" value="płatki" name="wybor">
</form>
    <?php echo $_SESSION['error']; session_destroy();?>
</body> 