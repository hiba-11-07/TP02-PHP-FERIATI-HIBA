<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - PHP</title>
</head>
<body>

<h2>1. Table de multiplication de 7</h2>

<?php
$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
}
?>

<h2>2. Pyramide d'étoiles</h2>

<pre>
<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
</pre>

</body>
</html>