<?php
    $formMethode = $_SERVER['REQUEST_METHOD'];   
    switch($formMethode) {
        case "POST":
            if(isset($_POST['firstname'])){$firstname=$_POST['firstname'];}
            if(isset($_POST['lastname'])){$lastname=$_POST['lastname'];}
        break;
        case "GET":
            if(isset($_GET['firstname'])){$firstname=$_GET['firstname'];}
            if(isset($_GET['lastname'])){$lastname=$_GET['lastname'];}
        break;
    }
    
    if(isset($firstname) && isset($lastname)){
        if(($firstname!="")&&($lastname!="")){
        echo "You name is $firstname $lastname. Isn't ?";        
        }  else {
            echo"Veuillez remplir tout les champ du formulaire<br>";
            echo "<button onclick=\"history.back()\">retour</button>";
        }       
    }   else {
        echo "Vous n'avez pas remplit le formulaire";
    }

?>
