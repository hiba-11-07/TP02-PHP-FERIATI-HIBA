<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - PHP</title>
</head>
<body>

<h2>1. Déclaration et affichage des types</h2>

<pre>
<?php
$entier = 42;
$chaine = "42";
$reel = 15.8;
$vrai = true;
$faux = false;
$vide = null;

var_dump($entier);
var_dump($chaine);
var_dump($reel);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
?>
</pre>

<h2>2. Conversions de types</h2>

<pre>
<?php
// Conversion de "42" en entier
$conversion1 = (int) "42";
echo "Conversion de \"42\" en entier : ";
var_dump($conversion1);

// Conversion de 15.8 en entier
$conversion2 = (int) 15.8;
echo "Conversion de 15.8 en entier : ";
var_dump($conversion2);

// Conversion de 42 en chaîne
$conversion3 = (string) 42;
echo "Conversion de 42 en chaîne : ";
var_dump($conversion3);
?>
</pre>

<h2>3. Affichage de true et false</h2>

<pre>
<?php
echo "echo true : ";
echo true;
echo "\n";

echo "echo false : ";
echo false;
echo "\n";

echo "var_dump(true) : ";
var_dump(true);

echo "var_dump(false) : ";
var_dump(false);
?>
</pre>

<h2>4. Conversion en booléens</h2>

<pre>
<?php
$b1 = (bool) 0;
$b2 = (bool) "0";
$b3 = (bool) "PHP";
$b4 = (bool) [];

echo "Conversion de 0 : ";
var_dump($b1);

echo "Conversion de \"0\" : ";
var_dump($b2);

echo "Conversion de \"PHP\" : ";
var_dump($b3);

echo "Conversion d'un tableau vide : ";
var_dump($b4);
?>
</pre>

</body>
</html>