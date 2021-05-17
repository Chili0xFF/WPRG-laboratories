<html>
    <head>
    <style>body{background-color: black;color: grey;}</style>  <?php //darkmode ponieważ szanuję Pana i swoje oczy?>
    </head>
    <body>
    <h1> Zapisano flagi w folderze z plikiem index2.php</h1>
    <?php
    //FlagaPolski
    $polska = imagecreatetruecolor(200,100);
    $white = imagecolorallocate($polska,255,255,255);
    $red = imagecolorallocate($polska,255,0,0);
    imagefill($polska,0,0,$white);
    imageline($polska,0,50,200,50,$red);
    imagefill($polska,0,51,$red);
    imagejpeg($polska,"polska.jpeg");
    imagedestroy($polska);
    //FlagaFrancji
    $francja = imagecreatetruecolor(200,100);
    $white = imagecolorallocate($francja,255,255,255);
    $red = imagecolorallocate($francja,255,0,0);
    $blue = imagecolorallocate($francja,0,0,255);
    imagefill($francja,0,0,$white);
    imageline($francja,66,0,66,100,$blue);
    imageline($francja,132,0,132,100,$red);
    imagefill($francja,0,0,$blue);
    imagefill($francja,133,0,$red);
    imagejpeg($francja,"francja.jpeg");
    imagedestroy($francja);
    //FlagaSzwecji
    $szwecja = imagecreatetruecolor(200,100);
    $blue = imagecolorallocate($szwecja,0,0,255);
    $yellow = imagecolorallocate($szwecja,255,255,0);
    imagefill($szwecja,0,0,$blue);
    imageline($szwecja,40,0,40,100,$yellow);
    imageline($szwecja,60,0,60,100,$yellow);
    imageline($szwecja,0,40,200,40,$yellow);
    imageline($szwecja,0,60,200,60,$yellow);
    imagefill($szwecja,50,0,$yellow);
    imagefill($szwecja,50,50,$yellow);
    imagefill($szwecja,50,90,$yellow);
    imagefill($szwecja,0,50,$yellow);
    imagefill($szwecja,150,50,$yellow);
    imagejpeg($szwecja,"szwecja.jpeg");
    imagedestroy($szwecja);
    //FlagaNorwegii
    $norwegia = imagecreatetruecolor(200,100);
    $white = imagecolorallocate($norwegia,255,255,255);
    $red = imagecolorallocate($norwegia,255,0,0);
    $blue = imagecolorallocate($norwegia,0,0,255);
    imagefill($norwegia,0,0,$red);
    imageline($norwegia,40,0,40,100,$white);
    imageline($norwegia,60,0,60,100,$white);
    imageline($norwegia,0,40,200,40,$white);
    imageline($norwegia,0,60,200,60,$white);
    imagefill($norwegia,50,0,$white);
    imagefill($norwegia,50,50,$white);
    imagefill($norwegia,50,90,$white);         ///Kod Norwegii jest identyczny jak kod Szwecji, jedynie zmienione są minimalnie koordynaty
    imagefill($norwegia,0,50,$white);
    imagefill($norwegia,150,50,$white);
    
    imageline($norwegia,45,0,45,100,$blue);
    imageline($norwegia,55,0,55,100,$blue);
    imageline($norwegia,0,45,200,45,$blue);
    imageline($norwegia,0,55,200,55,$blue);
    imagefill($norwegia,50,0,$blue);
    imagefill($norwegia,50,50,$blue);
    imagefill($norwegia,50,90,$blue);
    imagefill($norwegia,0,50,$blue);
    imagefill($norwegia,150,50,$blue);
    imagejpeg($norwegia,"norwegia.jpeg");
    imagedestroy($norwegia);
    ?>
    <img src='./polska.jpeg'>  <?php //wyrzucanie obrazów na stronę służyło szybszemu ich rysowaniu i sprawdzaniu?>
    <img src='./francja.jpeg'>
    <img src='./szwecja.jpeg'>
    <img src='./norwegia.jpeg'>
    </body>
</html>