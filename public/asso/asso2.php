<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
        <title>My Green City - Conservatoire d'espaces naturels Centre-Val de Loire</title>
        <link rel="stylesheet" href="/public/css/style-asso.css">
        <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
        <link rel="icon" type="image/png" href="/public/images/green-v2.png" />
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
                <img class="assoImg" src="/public/images/asso2.jpg" alt="Logo Loiret Nature Environnement">
            </div>
        </section>

        <section class="description">
            <h2>DESCRIPTION</h2>
            <div class="textDescription">
                <p>Créée en 1946 sous le nom des "Naturalistes Orléanais", Loiret Nature Environnement est une association de loi 1901.</p>
                <p>Elle a pour but de: Mieux connaitre pour mieux préserver, Eduquer à l'environnement pour sensibiliser un large public et Agir pour plus d'éco-citoyenneté.</p>
                <p>Pour agir l'association compte environ 600 adhérents, 6 groupes thématiques (ornithologie, géologie, botanique, mycologie, zero pesticide/eau/agriculture, reserve naturel) et une equipe pluridisciplinaire de permanents et de bénévoles actifs.</p>
            </div>
        </section>

        <?php include '../footer.php'; ?>

    </body>
</html>