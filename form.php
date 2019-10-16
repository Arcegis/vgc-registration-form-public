<?php

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$date = htmlspecialchars($_POST['date']);
$popid = htmlspecialchars($_POST['popid']);
$mail_joueur = htmlspecialchars($_POST['mail']);
$pseudo_discord = htmlspecialchars($_POST['pseudo_discord']);
$pseudo_twitter = htmlspecialchars($_POST['pseudo_twitter']);
$date_instant_t = date("d-m-Y");
$mail_organisateur = ""
$sujet_du_mail_a_envoyer_aux_participants = ""
$contenu_du_mail_a_envoyer_aux_participants = ""

if (isset($_POST['prenom']) && isset ($_POST['nom']) && isset ($_POST['date']) && isset ($_POST['popid'])){
mail("$mail_organisateur", "Inscription à un Tournoi", "Bonjour,\r\n\r\nPrénom : {$prenom} \r\nNom : {$nom},\r\nPseudonyme Discord : {$pseudo}\r\nPseudonyme Twitter: @{$pseudo_twitter}\r\nNé le {$date}\r\net possédant le POP ID {$popid}\r\ns'est inscrit ou inscrite pour votre Tournoi.\r\n\r\nLe mail pour contacter cette personne est : {$mail}", "From:" . $mail_organisateur . "\r\n" .
     "Reply-To:" . $mail_organisateur . "\r\n" .
     'Content-Type: text/plain; charset="utf-8"');

mail($mail, $sujet_du_mail_a_envoyer_aux_participants, $contenu_du_mail_a_envoyer_aux_participants, "From:" . $mail_organisateur . "\r\n" .
     "Reply-To:" . $mail_organisateur . "\r\n" .
     'Content-Type: text/plain; charset="utf-8"');


echo("<html><head><meta charset=\"utf8\"><link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\"></head><body><p>Vous êtes préinscrit ou préinscrite !</p><p>Récapitulatif d'inscription <br/>Nom : {$nom}<br>Prénom : {$prenom}<br/>POP ID : {$popid}<br/>Date de Naissance : {$date}<br/>Vous serez redirigé ou redirigée vers le formulaire dans 10 secondes.</p></body></html>");
header("Refresh:10; url=index.html");
}

else {	
echo("<html><head><meta charset=\"utf8\"</head><body>Oh oh, il manque une variable ! Vous serez redirigé ou redirigée dans 5 secondes.</body>");
header("Refresh:5; url=index.html");
}
?>