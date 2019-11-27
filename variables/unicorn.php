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
    /*
    In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.
    */  

    if(isset($_POST['genre'])){
        $choice=$_POST['genre'];
        $link = array(
            '0' => 'https://media2.giphy.com/media/8lN7K4PmqPIj7Ha7SA/200.webp?cid=790b7611d53da65b435f3588bfa74d284ae3688f9935aa3a&rid=200.webp',
            '1' => 'https://media2.giphy.com/media/mjo3HtlPnEuNq/giphy.webp?cid=790b76115e8bb0027db58652469ec6f2c64164d1ceacef64&rid=giphy.webp',
            '2' => 'https://media0.giphy.com/media/yfBsj5zsTkC3u/giphy.webp?cid=790b7611dad85c67fdb3b3211b2e1c9b7cb0c82a8fb71914&rid=giphy.webp'
        );
        echo "<img src=\"$link[$choice]\">";
    }

    ?> 
    
    <form action="unicorn.php" method="post">
       What are you ?<br> <select name="genre">
            <option value="0">Human</option>
            <option value="1">Unicorn</option>
            <option value="2">cat</option>
        </select>
        <br>
    <button type="submit">Send the form</button>
    </form>
</body>
</html>