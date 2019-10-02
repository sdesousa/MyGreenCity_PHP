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
                <img class="assoImg" src="/images/asso1.jpg" alt="Logo Conservatoire d'espaces naturels région centre val de Loire">
            </div>
        </section>

        <section class="description">
            <h2>DESCRIPTION</h2>
            <div class="textDescription">
                <p>Structure d’initiative citoyenne, consensuelle et professionnelle, le Conservatoire permet, grâce au soutien de plusieurs partenaires convaincus de l'intérêt de sa démarche, de compléter les mesures réglementaires à une échelle plus fine, et plus adaptée aux différents contextes locaux.</p>
                <p>Après 20 ans d'action, le Conservatoire d'espaces naturels Centre-Val de Loire protège un réseau d'une centaine de sites protégés, répartis sur près de 3 500 hectares en région Centre-Val de Loire.</p>
            </div>
        </section>

        <?php include '../footer.php'; ?>

    </body>
</html>