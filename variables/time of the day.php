<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*     
    If the time is between 05h00 and 09h00, display "Good morning !".
    If the time is between 09h01 and 12h00, affiche "Good day !".
    If the time is between 12h01 and 16h00, affiche "Good afternoon !".
    If the time is between 16h01 and 21h00, affiche "Good evening !".
    If the time is between 21h01 and 04h59, affiche "Good night !".
    */
    $message = ["Good morning !","Good day !","Good afternoon !","Good evening !","Good night !"];
    $theHour = date("Gi");
    if (($theHour>=500)AND($theHour<=900)) {
        echo $message[0];
    } else if (($theHour>=901)AND($theHour<=1200)) {
        echo $message[1];
    }else if (($theHour>=1201)AND($theHour<=1600)) {
        echo $message[2];
    }else if (($theHour>=1601)AND($theHour<=2100)) {
        echo $message[3];
    }else if ((($theHour>=2101)AND($theHour<=2400))OR($theHour<=459)) {
        echo $message[4];
    }
    
    ?>
</body>
</html>