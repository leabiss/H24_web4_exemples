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
<?php
$liste = [203, 153, 63, 22, 504, 12, 504];

$liste = array_unique($liste);
rsort($liste);

echo "Max : $liste[0]<br/>";
echo "Deuxième max : $liste[1]<br/>";
?>
<a href='index.php'>back</a>
</body>
