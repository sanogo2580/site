<?php
$to = "sanogodramabe@gmail.com"; // ← À remplacer par ton adresse

$subject = "Nouvelle commande de voiture de luxe";

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$nationalite = $_POST['nationalite'];
$sexe = $_POST['sexe'];
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$prix = $_POST['prix'];
$carburant = $_POST['carburant'];
$transmission = $_POST['transmission'];

$message = "
NOUVELLE COMMANDE DE VOITURE

Client :
Nom : $nom
Prénom : $prenom
Téléphone : $telephone
Nationalité : $nationalite
Sexe : $sexe

Voiture commandée :
Marque : $marque
Modèle : $modele
Prix : $prix
Carburant : $carburant
Transmission : $transmission
";

$headers = "From: site@luxeauto.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Commande envoyée avec succès. Merci !";
} else {
    echo "Erreur lors de l'envoi. Veuillez réessayer.";
}
?>
