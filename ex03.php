<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - PHP</title>
</head>
<body>

<?php
// 1. Déclaration des constantes
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

// 2. Déclaration du prix et de la quantité
$prixUnitaireHT = 60;
$quantite = 3;

// 3. Calculs
$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;

// 4. Ajout des frais de livraison
$totalTTC += 15;

// 5. Vérification de l'existence de la constante
?>

<h2>Récapitulatif de la commande</h2>

<p>Prix unitaire HT : <?= $prixUnitaireHT ?> <?= DEVISE ?></p>
<p>Quantité : <?= $quantite ?></p>
<p>Total HT : <?= $totalHT ?> <?= DEVISE ?></p>
<p>Taux de TVA : <?= TAUX_TVA ?> %</p>
<p>Montant de TVA : <?= $montantTVA ?> <?= DEVISE ?></p>
<p>Total TTC : <?= $totalHT + $montantTVA ?> <?= DEVISE ?></p>
<p>Frais de livraison : 15 <?= DEVISE ?></p>
<p><strong>Montant final : <?= $totalTTC ?> <?= DEVISE ?></strong></p>

<?php
if (defined("TAUX_TVA")) {
    echo "<p>La constante TAUX_TVA est définie.</p>";
} else {
    echo "<p>La constante TAUX_TVA n'est pas définie.</p>";
}
?>

</body>
</html>