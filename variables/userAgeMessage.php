<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Display a different greeting according to the user's age.

    Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.

    Here is the user experience we aim for :
    First, users see a form asking for their age :

    Please type your age : __

    When they submit the form, the page displays the right message:

    if age is less than 12 years old, display "Hello kiddo!"
    if age is between 12 and 18 years old, display "Hello Teenager !"
    if age is between 18 and 115 years old, display Hello Adult !"
    if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"

    Have both the form and the processing script in the same file. Use the GET method.
    */    
    if(isset($_GET['age'])){
        $age = $_GET['age'];
        if($age<12){
            echo"Hello Kiddo !";
        }else if(($age>11)AND($age<19)){
            echo"Hello Teenager !";
        }else if(($age>18)AND($age<116)){
            echo"Hello Adult !";
        }else{
            echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        };
    }

    ?>
   <form action="" method="get">
       Entrez votre age : <input type="text" name="age" id="age" size=3 maxlength="3">
       <button type="submit">Envoyez</button>
   </form>
</body>
</html>