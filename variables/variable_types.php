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
    $my_name = "emile";
    $my_age = 46;
    $eye_color = "brown";
    $myFamily=[
        0=>"gaby",
        1=>"sébi",
        2=>"laura"
    ];
    $message="<p>hi! my name is $my_name</p>";
    $message.="<p>I'm $my_age years old</p>";
    $message.="<p>My eyes are $eye_color</p>";
    $message.="<p>the first person in my family is $myFamily[0]</p>";

    echo $message;

    ?>
</body>
</html>