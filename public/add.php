<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>My Green City - <?= $_GET['id']; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/green-v2.png" />
</head>

<body>

    <?php
    include 'header.php';
    require_once '../connec/connec.php';









    ?>

<!--  TODO: type formulaire + CSS  -->


    <form class='formulaireAsso' action='' method="POST">
        <fieldset class="field">
            <legend>Ajouter une association</legend>
            <div  class="form">
                <div class="fieldAsso">
                    <label for="name">NAME:</label>
                    <input type="text" id="name" name="name" autocomplete <?php if(isset($_POST['name'])) echo 'value="' . $_POST['name'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="address">ADDRESS:</label>
                    <input type="text" id="address" address="address" autocomplete <?php if(isset($_POST['address'])) echo 'value="' . $_POST['address'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="telephone">TELEPHONE:</label>
                    <input type="text" id="telephone" telephone="telephone" autocomplete <?php if(isset($_POST['telephone'])) echo 'value="' . $_POST['telephone'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="fax">FAX:</label>
                    <input type="text" id="fax" fax="fax" autocomplete <?php if(isset($_POST['fax'])) echo 'value="' . $_POST['fax'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="mail">MAIL:</label>
                    <input type="text" id="mail" mail="mail" autocomplete <?php if(isset($_POST['mail'])) echo 'value="' . $_POST['mail'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="url">URL:</label>
                    <input type="text" id="url" url="url" autocomplete <?php if(isset($_POST['url'])) echo 'value="' . $_POST['url'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="logo">LOGO:</label>
                    <input type="text" id="logo" logo="logo" autocomplete <?php if(isset($_POST['logo'])) echo 'value="' . $_POST['logo'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="abbreviation">ABBREVIATION:</label>
                    <input type="text" id="abbreviation" abbreviation="abbreviation" autocomplete <?php if(isset($_POST['abbreviation'])) echo 'value="' . $_POST['abbreviation'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="description">DESCRIPTION:</label>
                    <textarea id="desccription" name="description" ><?php if(isset($_POST['description'])) echo $_POST['description'];?></textarea>
                </div>

            </div>
            <div  class="button">
                <button type="submit" id="submit" name="submit" value="sent">Envoyer</button>
            </div>

            <?php
            if (!empty($errors)) {
                ?>
                <ul class="errorList">
                    <?php foreach ($errors as $key => $value) {
                        ?>
                        <li class="errorListElement">
                            <?= $value ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>

        </fieldset>
    </form>

    <?php include 'footer.php'; ?>

</body>
</html>
