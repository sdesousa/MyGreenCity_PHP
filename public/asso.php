<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>My Green City - <?= $_GET['id']; ?></title>
    <link rel="stylesheet" href="css/style-asso.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/green-v2.png" />
</head>

<body>

<?php
include 'header.php';
?>

<?php
require_once '../connec/connec.php';

$id = $_GET['id'];
$pdo = new \PDO(DSN, USER, PASS);
$query = "SELECT * FROM association WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->execute();
$association = $statement->fetch(PDO::FETCH_ASSOC);

?>




<section>
    <h1><?= $association['name']; ?></h1>
</section>

<section class="secInfo">
    <h2>INFORMATIONS</h2>
    <div class = linkUD>
        <a href="update.php?id=<?= $id ?>" >Modifier l'association</a>
        <a href="delete.php?id=<?= $id ?>" >Supprimer l'association</a>
    </div>
    <div class="Informations">
        <div class="divTextInformations">
            <ul class ="textInformations">
                <li>Siège social</li>
                <li><?= $association['address']; ?></li>
                <li>Télephone : <?= $association['telephone']; ?> - Télécopie : <?= $association['fax']; ?></li>
                <li>Mail : <?= $association['mail']; ?></li>
                <li><a href="<?= $association['url']; ?>" target="_blank"><?= $association['url']; ?></a></li>
            </ul>
        </div>
        <img class="assoImg" src=<?= $association['logo']; ?> alt="Logo <?= $association['name']; ?>">
    </div>
</section>

<section class="description">
    <h2>DESCRIPTION</h2>
    <div class="textDescription">
        <?= $association['description']; ?>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
