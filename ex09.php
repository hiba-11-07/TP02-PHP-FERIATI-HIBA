<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - PHP</title>
</head>
<body>

<h2>Résultats des étudiants</h2>

<?php
// Jeu de données
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

// Initialisation des variables
$somme = 0;
$nombreEtudiants = 0;
$nombreValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

// Tableau HTML
echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Résultat</th>
      </tr>";

// Parcours du tableau associatif
foreach ($notes as $nom => $note) {

    // Détermination du résultat
    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    // Affichage d'une ligne
    echo "<tr>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $resultat . "</td>";
    echo "</tr>";

    // Calcul de la somme et du nombre d'étudiants
    $somme += $note;
    $nombreEtudiants++;

    // Recherche de la meilleure note
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

echo "</table>";

// Calcul de la moyenne
$moyenne = $somme / $nombreEtudiants;

// Affichage du bilan
echo "<h2>Bilan de la classe</h2>";
echo "Somme des notes : " . $somme . "<br>";
echo "Moyenne de la classe : " . $moyenne . "<br>";
echo "Nombre d'étudiants ayant validé : " . $nombreValides . "<br>";
echo "Meilleure note : " . $meilleureNote . "<br>";
echo "Étudiant ayant la meilleure note : " . $meilleurEtudiant;
?>

</body>
</html>