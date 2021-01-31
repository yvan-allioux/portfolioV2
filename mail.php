<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $adresseIPDuClient = $_SERVER["REMOTE_ADDR"] ." - ". $_SERVER["HTTP_USER_AGENT"];
    
    
    $Ip = $_SERVER["REMOTE_ADDR"];
        if ($Ip == '212.92.112.131') {  //ip banie
            echo '<p>Fatal error: Call to undefined function: fope() in</p>';
        }else{
            $message2 = ($adresseIPDuClient . $_POST['nom'] ." ". $_POST['prenom'] ."\nmessage:\n" . $_POST['comment']. $_POST['Email']." ip:" . $adresseIPDuClient);
            $retour = mail('yvan.allioux.pro@gmail.com', 'Envoi depuis la page Contact', $message2 );
            if ($retour) {
                echo '<p>Votre message a bien été envoyé.</p> <a href="index.html">Cliquez ici pour revenire a l\'accueille</a>';
            }
        }
    
    
    
    ?>
</body>

</html>
