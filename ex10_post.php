<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>

<h2>Résultat du formulaire POST</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Veuillez envoyer le formulaire POST pour afficher le résultat.";
} elseif (
    !isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])
    || !is_string($_POST["nom"])
    || !is_string($_POST["prenom"])
    || !is_string($_POST["groupe"])
) {
    echo "Veuillez remplir et envoyer le formulaire POST.";
} else {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

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
<a href="ex10_post.html">Retour au formulaire POST</a>

</body>
</html>