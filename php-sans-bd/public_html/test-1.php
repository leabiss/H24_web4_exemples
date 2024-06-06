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

$valeur1 = $liste[0];
$valeur2 = $liste[1];

foreach ($liste as $val) {
    if ($val > $valeur2) {
        if ($val > $valeur1) {
            $valeur2 = $valeur1;
            $valeur1 = $val;
        } else if ($val != $valeur1) {
            $valeur2 = $val;
        }
    }
}

echo "Max : $valeur1";
echo "<br/>";
echo "Deuxième max : $valeur2<br/>";
?>
<a href='index.php'>back</a>
</body>
