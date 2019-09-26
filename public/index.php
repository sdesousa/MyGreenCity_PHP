<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
        <title>My Green City</title>
        <meta name="author" content="Noms" >
        <meta name="description" content="Description">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/green-v2.png" />
    </head>
    <body>
        <!-- Header / nav -->
        <?php include 'header.php'; ?>

        <!-- Section Action -->
        <?php
            $actions = [
                    'La mobilite' => [
                        'images/logo-mobile.png',
                        "L'ambition principale est de lutter contre l'usage de la voiture individuelle, qui représente actuellement 55% des déplacements des habitants de la métropole. Pour cela, plusieurs actions \"ont déjà été lancées comme la conversion de la flotte de bus au 100% électrique d'ici 2024, l'amélioration des franchissements de la Loire pour les piétons et les cyclistes avec notamment les travaux sur la RD2020.",
                    ],
                    'L\'accompagnement' => [
                            'images/logo-accompagnement.png',
                            "Il faut qu'on assure une montée en compétences des habitants et de l'ensemble des acteurs du territoire sur les questions de transition\", affirme Natacha Billet, directrice de l'environnement et des risques à Orléans Métropole. Ainsi, de la pédagogie sera faite pour accompagner les habitants dans le changement de leurs pratiques comme la réduction des déchets, le passage à une alimentation biologique et locale. La Métropole veut aussi créer un réseau de citoyens engagés pour le climat, soutenir le développement de l'économie circulaire...",
                    ],
                    'L\'urbanisme' => [
                            'images/logo-urbanisme.png',
                            "La notion de développement durable sera intégrée dans l'ensemble des projets et des documents de planification. Dans un premier temps, le plan climat déploiera le référentiel de la ville durable, un outil pratique de mises en oeuvre des politiques environnementales dans les projets urbains. Un autre objectif est aussi de développer l'agriculture urbaine et soutenir une alimentation locale biologique.",
                    ],
            ];
            
        ?>
		<section class="secAction" id="link_actions">
            <h2> NOS ACTIONS </h2>
            <div class="divAction">
                <?php
                    foreach($actions as $action => $description) {
                    ?>
                        <div class="action">
                            <img class="actionpict" src=<?= $description[0] ?> alt= "Logo d'un bus">
                            <p class="actitle"><?= $action ?> <br> <span class="actdescrpt"> <?= $description[1] ?> </span></p>
                        </div>
                        <hr class="hrAction">
                    <?php
                    }
                    ?>
                
<!--				<div class="action">-->
<!--                    <img class="actionpict" src="images/logo-mobile.png" alt="Logo d'un bus">-->
<!--                        <p class="actitle">La mobilité <br>-->
<!--                            <span class="actdescrpt">L'ambition principale est de lutter contre l'usage de la voiture individuelle, qui représente actuellement 55% des déplacements des habitants de la métropole. Pour cela, plusieurs actions "ont déjà été lancées comme la conversion de la flotte de bus au 100% électrique d'ici 2024, l'amélioration des franchissements de la Loire pour les piétons et les cyclistes avec notamment les travaux sur la RD2020.</span></p>-->
<!--                </div>-->
<!--                <hr class="hrAction">-->
<!--                <div class="action" id="action2">        											-->
<!--					<img class="actionpict" src="images/logo-accompagnement.png" alt="Logo d'une poignée de main">-->
<!--                        <p class="actitle actitleMobile">L'accompagnement <br>-->
<!--                            <span class="actdescrpt">"Il faut qu'on assure une montée en compétences des habitants et de l'ensemble des acteurs du territoire sur les questions de transition", affirme Natacha Billet, directrice de l'environnement et des risques à Orléans Métropole. Ainsi, de la pédagogie sera faite pour accompagner les habitants dans le changement de leurs pratiques comme la réduction des déchets, le passage à une alimentation biologique et locale. La Métropole veut aussi créer un réseau de citoyens engagés pour le climat, soutenir le développement de l'économie circulaire...</span></p>-->
<!--                </div>-->
<!--                <div class="action"> -->
<!--					<img class="actionpict" src="images/logo-urbanisme.png" alt="Logo d'un bâtiment">							-->
<!--						<p class="actitle">L'urbanisme <br>-->
<!--							<span class="actdescrpt">La notion de développement durable sera intégrée dans l'ensemble des projets et des documents de planification. Dans un premier temps, le plan climat déploiera le référentiel de la ville durable, un outil pratique de mises en oeuvre des politiques environnementales dans les projets urbains. Un autre objectif est aussi de développer l'agriculture urbaine et soutenir une alimentation locale biologique.</span></p>									-->
<!--				</div>-->
<!--                <hr class="hrAction">-->
               </div>
        </section>

         <!-- Section Associations -->

        <?php
            $associations =[
                    'cen' => [
                        'Conservatoire des espaces naturels Centre-Val de Loire',
                        'asso/asso1.php',
                        'images/asso1.jpg',
                        'asso1Pict',
                        [
                            '3, rue de la lionne - 45000 Orléans',
                            '02 38 77 02 72',
                            '02 38 46 06 35',
                            'siege.orleans@cen-centrevaldeloire.org',
                            'www.cen-centrevaldeloire.org',
                        ],
                    ],
                    'lne' => [
                        'Loiret Nature Environnement',
                        'asso/asso2.php',
                        'images/asso2.jpg',
                        'asso2Pict',
                        [
                            '64, Route d\'Olivet - 45100 Orléans',
                            '02 38 56 69 84',
                            '02 38 56 33 48',
                            'asso@lne45.org',
                            'www.loiret-nature-environnement.org',
                        ],
                    ],
                    'lpb' => [
                        'Les Paniers Bios',
                        'asso/asso3.php',
                        'images/asso3.jpg',
                        'asso3Pict',
                        [
                            '27 bis rue des Ponts Chartrains - 41000 Blois',
                            '02 54 74 16 83',
                            '',
                            'info@lespaniersbioduvaldeloire.fr',
                            'www.lespaniersbioduvaldeloire.fr',
                        ],
                    ],
            ];
        ?>

		<section class="secAssociations" id="link_associations">
            <h2>ASSOCIATIONS</h2>
			<div class="assosLinks">

                <?php foreach ($associations as $shortName => $info) {
                    ?> <div class="divAssPict">
                        <a href="<?= $info[1] ?>"><img class="<?= $info[3] ?>" src="<?= $info[2] ?>" alt="<?= $info[0] ?>"> </a>
                        <p class="assosNames"> <?= $info[0] ?></p>
                    </div>
                <?php
                }
                ?>


<!--                <div class="divAssPict">-->
<!--                    <a href="asso/asso1.php"><img class="asso1Pict" src="images/asso1.jpg" alt="Conservatoire d'espaces naturels région centre val de Loire"></a>-->
<!--                    <p class="assosNames">Conservatoire des espaces naturels<br> Centre-Val de Loire </p>-->
<!--                </div>-->
<!--                <div class="divAssPict">               -->
<!--                    <a href="asso/asso2.php"><img class="asso2Pict" src="images/asso2.jpg" alt="Loiret Nature Environement"></a>-->
<!--                    <p class="assosNames">Loiret Nature Environnement</p>-->
<!--                    <p></p>-->
<!--                </div>-->
<!--                <div class="divAssPict"> -->
<!--                    <a href="asso/asso3.php"><img class="asso3Pict" src="images/asso3.jpg" alt="MNLE 45"></a>-->
<!--                    <p class="assosNames">Les Paniers Bios</p>-->
<!--                    <p></p>-->
<!--                </div>-->

			</div>
		</section>

	    <!-- Gestion des déchets -->
		<section class="gestionDechets" id="link_dechets">
            <h2>GESTION DES DECHETS</h2>
			<h3>CONSEILS</h3>
			<div class="conseils">
				<img class="imgTrier" src="images/Trier.jpg" alt="Dessin d'un bonhomme qui jete ses déchets">
				<div class="conseilsDroite">
				    <div class="textConseils">
				        <p>Les 6 déchetteries sont accessibles aux habitants de la métropole orléanaise</p>
				        <p>et aux professionnels munis d’une carte d’accès.</p>
				        <p>Le volume d’apport est limité à 3 m3 pour les particuliers et 5 m3 pour les professionnels.</p>
				    </div>
				    <div class="dechetsRefus">
				        <p class="titleDechetsRefus">Déchets refusés</p>
				        <div class="dechetsRefusText">
				            <p>Cadavre d’animaux, sacs de déchets ménagers, déchets non refroidis, bouteilles de gaz,</p>
				            <p>déchets amiantés (exceptés les déchets d'amiante liés), carcasses de voitures,</p>
				            <p>déchets phytosanitaires des agriculteurs, engins explosifs, extincteurs,</p>
				            <p>pneumatiques des professionnels, produits radioactifs.</p>
				        </div>
				    </div>
				</div>
			</div>
		</section>
        <section class="secCollecte">
            <h3>POINTS DE COLLECTE</h3>
            <div class="pointsCollecte">
                <div class="menuDeroulant">
                    <details>
                        <summary>Zone de collecte - Orléans</summary>
                        <ul class="ulCollecte">
                            <li><p><span class="spanVilles">Orléans</span> : Chemin du Clos de l’Alouette – 33 rue Hatton</p></li>
                        </ul>
                    </details>
                    <details>
                        <summary>Zone de collecte - Orléans Nord</summary>
                        <ul class="ulCollecte">
                            <li><p><span class="spanVilles">Saint Jean de Braye</span> : Parc Archimède – rue de la Burelle</p></li>
                            <li><p><span class="spanVilles">Saran</span> : Zone d’activités de Montaran – rue Marcel Paul</p></li>
                            <li><p><span class="spanVilles">Ingré</span> : Chemin de la Vallée de l’Azin</p></li>
                            <li><p><span class="spanVilles">Chécy</span> : Parc d’activités de la Guignardière – rue Pierre et Marie Curie</p></li>
                        </ul>
                    </details>
                    <details>
                        <summary>Zone de collecte - Orléans Sud</summary>
                        <ul class="ulCollecte">
                            <li><p><span class="spanVilles">Saint Cyr en Val</span> : Avenue du parc Floral</p></li>
                            <li><p><span class="spanVilles">Saint-Pryvé Saint-Mesmin</span> : Impasse des Moines (Végé'tri)</p></li>
                        </ul>
                    </details>
                </div>
                <img class="imgContainer" src="images/container.jpg" alt="Conteneur de décheterie">
            </div>
        </section>

        <hr>
        <!-- Section Formulaire -->
        
        <section>
            <h2>CONTACT</h2>
            <form method="post">
                <div  class="form">
                    <div class="name">
                        <label for="name">NOM</label>
                        <input type="text" id="name" name="user_name">                    
                    </div>
                    <div class="email">  
                        <label for="mail">EMAIL</label>          
                        <input type="email" id="mail" name="user_mail">
                    </div>
                    <div class="textarea">
                        <label for="msg">MESSAGE</label>
                        <textarea id="msg" name="user_message"></textarea>                        
                    </div>   
                </div>
                <div  class="button">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </section>

        <!-- Footer -->
        <?php include 'footer.php'; ?>

    </body>
</html>
