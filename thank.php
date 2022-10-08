<?php
$firstname = $_POST["user_name"];
$Prenom =$_POST["prenom"];
$email = $_POST["couriel"];
$Telephone = $_POST["telephone"];
$Subeject =$_POST["viande"];
$message = $_POST["message"];

echo 'Merci '. $Prenom .' ' . $firstname .' de nous avoir contacté à propos de “ '. $Subeject ;
echo "<br>","<br>";

echo 'Un de nos conseillers vous contactera soit à l’adresse '. $email . ' ou par téléphone au '. $Telephone . ' dans les plus brefs délais pour traiter votre demande :'; 
echo "<br><br>";
echo $message;
?>