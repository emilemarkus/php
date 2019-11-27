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
        if(isset($_GET['name'])){
            ?>
        <h1>hellosss<?php echo $_GET['name']; ?></h1>
       <?php
        $a = 5;
        $a = $a + 37;
        echo $a;   
    }
    ?>
</body>
</html>