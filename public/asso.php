<!DOCTYPE html>
<html lang="fr">

<?php
include 'header.php';
include 'variables.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>My Green City - <?= $_GET['name']; ?></title>
    <link rel="stylesheet" href="/css/style-asso.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/green-v2.png" />
</head>
<body>

<section>
    <h1><?= $_GET['name']; ?></h1>

</section>

<section class="secInfo">
    <h2>INFORMATIONS</h2>
    <div class="Informations">
        <div class="divTextInformations">
            <ul class ="textInformations">
                <li>Siège social</li>
                <li><?= $_GET['address']; ?></li>
                <li>Télephone : <?= $_GET['telephone']; ?> - Télécopie : <?= $_GET['fax']; ?></li>
                <li>Mail : <?= $_GET['mail']; ?></li>
                <li><a href="<?= $_GET['url']; ?>" target="_blank"><?= $_GET['url']; ?></a></li>
            </ul>
        </div>
        <img class="assoImg" src=<?= $_GET['logo']; ?> alt="Logo <?= $_GET['name']; ?>">
    </div>
</section>

<section class="description">
    <h2>DESCRIPTION</h2>
    <div class="textDescription">
        <?php
            $i = $_GET['shortName'];
            foreach($descriptionsAsso[$i] as $paragraph => $description) {
                ?> <p> <?= $description ?> </p>
                <?php
            }
        ?>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
