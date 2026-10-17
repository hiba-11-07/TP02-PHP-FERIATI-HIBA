<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>

<h2>Résultat du formulaire GET</h2>

<?php
if (
    !isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])
    || !is_string($_GET["nom"])
    || !is_string($_GET["prenom"])
    || !is_string($_GET["groupe"])
) {
    echo "Veuillez remplir et envoyer le formulaire GET.";
} else {
    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "Erreur : tous les champs sont obligatoires.";
    } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
        echo "Erreur : groupe invalide.";
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");

        echo "Bienvenue " . $prenom . " " . $nom
            . " ! Vous êtes dans le groupe " . $groupe . ".";
    }
}
?>

<br><br>
<a href="ex10_get.html">Retour au formulaire GET</a>

</body>
</html>