
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $messMen = "Hello Men !";
    $messWom = "nice to meet you";
    $_GET['gender']=="m" ? $message = $messMen : $message=$messWom ; 
    echo $message;
   ?>
   <form action="" method="get">
       What is your gender ? <input type="radio" name="gender" value="m" checked="checked" >M<input type="radio" name="gender" value="f">F
      <br> <button type="submit">Send It</button>
   </form>
 </body>
</html>