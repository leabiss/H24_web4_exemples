<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$annee = $_POST['annee'] ?? "";
$mois = $_POST['mois'] ?? "";
$jour = $_POST['jour'] ?? "";

$erreurs = [];

if (isset($_POST['submit'])) {
    if (empty($jour)) {
        $erreurs[] = "Le jour est vide";
    }
    if (empty($mois)) {
        $erreurs[] = "Le mois est vide";
    }
    if (empty($annee)) {
        $erreurs[] = "L'année est vide";
    }
    if (empty($erreurs)) {
        session_start();
        $_SESSION['annee'] = $annee;
        $_SESSION['mois'] = $mois;
        $_SESSION['jour'] = $jour;

        header("Location: bravo.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>### TITRE ###</title>
    <meta name="author" content="### VOS NOMS ###">
    <meta name="description" content="### NOM DU PROJET ###">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css?v=1.0.0">
    <script src="js/scripts.js?v=1.0.0" defer></script>
</head>
<body>

<form action="index.php" method="post">
    <label for="jour">Jour:</label><br>
    <input type="text" id="jour" name="jour" value="<?= $jour ?>"><br>
    <?php if (isset($_POST['submit']) && empty($jour)) { ?>
        <div class="error">*Le jour est vide</div>
    <?php } ?>
    <label for="mois">Mois:</label><br>
    <input type="text" id="mois" name="mois" value="<?= $mois ?>"><br>
    <?php if (isset($_POST['submit']) && empty($mois)) { ?>
        <div class="error">*Le mois est vide</div>
    <?php } ?>
    <label for="annee">Année:</label><br>
    <input type="text" id="annee" name="annee" value="<?= $annee ?>"><br>
    <?php if (isset($_POST['submit']) && empty($annee)) { ?>
        <div class="error">*L'année est vide</div>
    <?php } ?>
    <br>
    <input type="submit" name="submit" value="Envoyer">
</form>
</body>
</html>
