<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
        <title>My Green City - Conservatoire d'espaces naturels Centre-Val de Loire</title>
        <link rel="stylesheet" href="/css/style-asso.css">
        <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
        <link rel="icon" type="image/png" href="/images/green-v2.png" />
    </head>
    <body>
        <?php include '../header.php'; ?>

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
                <img class="assoImg" src="/images/asso3.jpg" alt="Logo Les Paniers Bios">
            </div>
        </section>

        <section class="description">
            <h2>DESCRIPTION</h2>
            <div class="textDescription">
                <p>Créée en 2000, l'association Val Bio Centre vise a developper une agriculture bio locale, commercialiser des produits bio de qualité en circuit-court, soutenir l'économie sociale et solidaire et organiser des formation collectives.</p>
                <p>Elle regroupe 50 producteurs de fruits et légumes biologique de la région Centre - Val de loire, plus de 40 fermes familiales bio, un etablissement et service d'aide par le travail et un partenariat avec des structures de l'economie sociale et solidaire.</p>
            </div>
        </section>

        <?php include '../footer.php'; ?>

    </body>
</html>