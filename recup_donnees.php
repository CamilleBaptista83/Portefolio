<?php

$to = 'cambaptista@hotmail.fr';
$sujet = 'formulaire site web';

if(isset($_POST['envoyer'])){



    if(isset($_POST['nom']) && 
    isset($_POST['email']) && 
    isset($_POST['entreprise']) && 
    isset($_POST['text'])) {

        if(!empty($_POST['nom']) && 
        !empty($_POST['email']) && 
        !empty($_POST['entreprise']) && 
        !empty($_POST['text'])){


            $nom=htmlspecialchars($_POST['nom']);
            $email=htmlspecialchars($_POST['email']);
            $entreprise=htmlspecialchars($_POST['entreprise']);
            $text=htmlspecialchars($_POST['text']);


            echo 
            "<p> Hello </p>
            <ul> 
            <li>$nom</li>
            <li>$email</li>
            <li>$entreprise</li>
            <li>Message : $text</li>
            
            </ul>";

        }
    }
}

?>
