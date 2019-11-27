<?php
    // we catch the method if exist
    $formMethode = $_SERVER['REQUEST_METHOD'];  
    // we increment this variable for each correct value sended
    $dataDone=0; 
    switch($formMethode) {
        // if method is POST  we catch the data if exist and not empty
        case "POST":
            if(isset($_POST['firstname'])&&($_POST['firstname']!="")){$firstname=$_POST['firstname'];$dataDone++;}
            if(isset($_POST['lastname'])&&($_POST['lastname']!="")){$lastname=$_POST['lastname'];$dataDone++;}
            if(isset($_POST['gender'])&&($_POST['gender'])!=""){$gender=$_POST['gender'];$dataDone++;}
            if(isset($_POST['file'])&&($_POST['file'])!=""){$file=$_POST['file'];$dataDone++;}
            
        break;
        //if methode is GET we catch the data if exist and not empty
        case "GET":
            if(isset($_GET['firstname'])&&($_GET['firstname']!="")){$firstname=$_GET['firstname'];$dataDone++;}
            if(isset($_GET['lastname'])&&($_GET['lastname']!="")){$lastname=$_GET['lastname'];$dataDone++;}
            if(isset($_GET['gender'])&&($_GET['gender'])!=""){$gender=$_GET['gender'];$dataDone++;}
            if(isset($_GET['file'])&&($_GET['file'])!=""){$file=$_GET['file'];$dataDone++;}
        break;
    }    
    // if all data exist
    if($dataDone==4){ 
        //we display it the data
        echo "<p>hello  $gender $firstname $lastname. Isn't ?</p>";
        $arrFile = explode('.',$file);
        echo "<p>Le nom du fichier est <b> $arrFile[0]</b> et son extension est <b>. $arrFile[1]</b></p>";     
       } else { // or we display again the form to complete it
        ?>
            <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="../../assets/css/style.css">
            <title>Document</title>
        </head> 
        <body>
            <form action="index.php" method="post">
                <h2>Fillup this form ,please.</h2>
                <select name="gender" id="formGender">
                    <option value="" selected>Choisissez</option>
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <p>Enter your firstname : <input type="text" name="firstname" id="formFirstname" length="15" maxlength="50"></p>
                <p>Enter your lastname : <input type="text" name="lastname" id="formLastname" length="15" maxlength="50"></p>
                <p>Join your file : <input type="file" name="file" id="formFile" accept=".pdf"></p>
                <button>Send this form</button>
            </form>

        </body>

        </html>
        <?php
    }

?>