<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>My Green City - Supprimer une association</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/green-v2.png" />
</head>

<body>

<?php
require_once '../connec/connec.php';

$id = $_GET['id'];
$pdo = new \PDO(DSN, USER, PASS);
$query = 'DELETE FROM association WHERE id=:id;';
$prep = $pdo->prepare($query);
$prep->bindValue(':id', $id, PDO::PARAM_INT);
$prep->execute();
header("Location: index.php");
exit();

?>

</html>