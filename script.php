<?php 
//Test pour savoir si le Formulaire est envoyée
if (! isset($_POST["submit"]))

$nom = (isset($_POST['nom']));

$prenom = (isset($_POST['prénom']));

$ddn = (isset ($_POST['ddn']));
$valid_ddn= "#(\d{4})/(\d{2})/(\d{2})#";

$jour = substr($datenaiss, 0, 2);
$mois = substr($datenaiss, 3, 2);
$annee = substr($datenaiss, 6, 4);

$cp = (isset($_POST['cp']));

$adresse = (isset($_POST['adresse']));

$ville = (isset($_POST['ville']));

$email = (isset($_POST['email']));

$condition = (isset($_POST['condition']));




//( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $email ) )




 

?>

 
   