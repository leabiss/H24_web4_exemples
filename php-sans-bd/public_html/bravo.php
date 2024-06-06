<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

session_start();
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
<a href="index.php">retour</a>
<h1>BRAVO!!</h1>

<?= "Année : ".$_SESSION['annee'] ?>
<br>
<?= "Mois : ".$_SESSION['mois'] ?>
<br>
<?= "Jour : ".$_SESSION['jour'] ?>
<br>
</body>
</html>
