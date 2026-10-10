<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - PHP</title>
</head>
<body>

<?php
// 1. Déclaration des variables
$nom = "Alami";
$prenom = "Sara";
$age = 19;
$formation = "Informatique Appliquée";

// 2. Construction d'une phrase avec la concaténation
$phrase = "Je m'appelle " . $prenom . " " . $nom
        . ", j'ai " . $age . " ans et je suis en "
        . $formation . ".";

// Affichage de la phrase
echo $phrase . "<br>";

// 3. Ajout d'une phrase avec l'opérateur .=
$phrase .= " J'apprends PHP.";

echo $phrase . "<br>";

// 4. Sensibilité à la casse
$note = 12;
$Note = 16;

echo "Note : " . $note . "<br>";
echo "Note : " . $Note . "<br>";
?>

</body>
</html>