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
    
    Improve the previous form to add another question: "Man or Woman?". Use an input of type radio to capture the data.

    If gender is "Woman", the displayed message should be adapted accordingly.

    For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".

    Do the same for all the other age ranges.

    Tip: You can nest conditional structures inside others.

    Improve the previous form to add yet another question: "Do you speak English ? ". Use an input of type radio to capture the data. Possible answers: "yes" or "no".

    Then modify your form processing script to implement this :

        If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.
        If the answer is "no", display "Aloha boy" or "Aloha Girl"

    Adapt all the other answers accordingly, using "Aloha" instead of "Hello".
    */    
    if((isset($_GET['age']))AND(isset($_GET['gender']))){
        $age = $_GET['age'];
        $gender=$_GET['gender'];
        $lang=$_GET['spEng'];
        // format gender
        if($gender=="male"){$adj="Mister";}else{$adj="Miss";}
        // introduction form
        if($lang=="yes"){$mess="hello";}else{$mess="Aloha";}
        //apply the message according the age,sex and langage
        if($age<12){
            echo"$mess $adj Kiddo !";
        }else if(($age>11)AND($age<19)){
            echo"$mess $adj Teenager !";
        }else if(($age>18)AND($age<116)){
            echo"$mess $adj Adult !";
        }else{
            echo "Wow! Still alive ? $adj are  you a robot, like me ? Can I hug you ?";
        };
    }

    ?>
   <form action="" method="get">
       How old are you : <input type="text" name="age" id="age" size=3 maxlength="3"><br>
       what is gender ? <input type="radio" name="gender" value="male">male <input type="radio" name="gender" value="female">female<br>
       Are you speaking English ? <input type="radio" name="spEng" value="yes">Yes<input type="radio" name="spEng" value="no">no<br>
       <button type="submit">Envoyez</button>
   </form>
</body>
</html>