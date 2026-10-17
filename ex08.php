<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - PHP</title>
</head>
<body>

<h2>Partie 1 : Nombres pairs de 0 à 20</h2>

<?php
$nombre = 0;

while ($nombre <= 20) {

    if ($nombre == 10) {
        echo "<strong>" . $nombre . "</strong><br>";
    } else {
        echo $nombre . "<br>";
    }

    $nombre += 2;
}
?>

<h2>Partie 2 : while et do-while</h2>

<?php
// Test avec while
$compteur = 5;
$executionsWhile = 0;

while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

echo "Nombre d'exécutions de while : " . $executionsWhile . "<br>";

// Réinitialisation du compteur avant do-while
$compteur = 5;
$executionsDoWhile = 0;

do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions de do-while : " . $executionsDoWhile . "<br>";
?>

<h2>Partie 3 : continue et break</h2>

<?php
for ($compteur = 1; $compteur <= 20; $compteur++) {

    // Arrêter avant d'afficher 16 ou une valeur supérieure
    if ($compteur >= 16) {
        break;
    }

    // Ignorer les multiples de 3
    if ($compteur % 3 == 0) {
        continue;
    }

    echo $compteur . "<br>";
}
?>

</body>
</html>