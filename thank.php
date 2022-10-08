<?php


$data = array_map('trim', $_POST);
$errors = [];

if(!isset($data["prenom"]) || empty($data["prenom"])) {
    $errors[] = "Le prénom est obligatoire";
}

if(!isset($data["user_name"]) || empty($data["user_name"])) {
    $errors[] = "Le nom est obligatoire";
}

if(!isset($data["couriel"]) || empty($data["couriel"])) {
    $errors[] = "L'email est obligatoire";
}

if(!isset($data["telephone"]) || empty($data["telephone"])) {
    $errors[] = "Le mot de passe est obligatoire";
}

if(!isset($data["viande"]) || empty($data["viande"])) {
    $errors[] = "Le sujet est obligatoire";
}
if(!isset($data["message"]) || empty($data["message"])) {
    $errors[] = "Le mot de passe est obligatoire";
}

if(!filter_var($data["couriel"], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'email n'est pas formaté correctement.";
}




if(count($errors) == 0) {

    echo "Youpi c'est réussi";
} else {
    echo "<p>Il y a des erreurs</p>";
    echo "<ul>";
    foreach($errors as $error)
    {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}





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