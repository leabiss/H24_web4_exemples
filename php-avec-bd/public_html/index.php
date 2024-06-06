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
$host = 'db'; // localhost ou adresse
$user = 'root';
$password = 'root';
$db = 'database';
$conn = new mysqli(
    $host,
    $user,
    $password,
    $db
);
if ($conn->connect_error) {
    die($conn->connect_error);
}

$query = "SET NAMES utf8";
$result = $conn->query($query);

if (!$result) {
    die($conn->error);
}
$query = "SELECT * FROM donnees";
$result = $conn->query($query);

if (!$result) {
    die($conn->error);
}

$rows = $result->num_rows;

for ($i = 0; $i < $rows; $i++) {
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo $row['ID'] . ' -> ' .
        $row['texte'] . '<br>';
}

$result->close();
$conn->close();

?>

<h1>BOILERPLATE</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>
