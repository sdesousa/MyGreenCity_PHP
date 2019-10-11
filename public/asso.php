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

<div class="superposition">
    <h1> MY <span class="Green">Green</span> CITY </h1>
</div>

<h2><?= $association['name']; ?></h2>

<section class="secInfo">
    <h2>INFORMATIONS</h2>
    <form class="linkUDasso" action="update.php" method="POST">
        <input name="id" type="hidden" value="<?= $id ?> "/>
        <button class="buttonCRUD" >Modifier une association</button>
    </form>
    <form class="linkUDasso" action="delete.php" method="POST">
        <input name="id" type="hidden" value="<?= $id ?> "/>
        <button class="buttonCRUD" >Supprimer une association</button>
    </form>
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
