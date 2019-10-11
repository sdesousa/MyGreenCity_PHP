<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>My Green City - Modifier une association</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/green-v2.png" />
</head>

<body>

<?php
include 'header.php';
require_once '../src/functions.php';
require_once '../connec/connec.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $pdo = new \PDO(DSN, USER, PASS);
    $query = "SELECT * FROM association WHERE id=:id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $association = $statement->fetch(PDO::FETCH_ASSOC);
}

if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['submitModif']))) {
    $formSubmission = array_map('trim', $_POST);
    $errors = errorCheckAssociation($formSubmission);

    if (empty($errors)) {
        foreach ($formSubmission as $key => $value) {
            $formSubmission[$key] = htmlentities($value);
        }
        $pdo = new \PDO(DSN, USER, PASS);
        $query = 'UPDATE association SET name= :name , abbreviation= :abbreviation, address= :address, telephone= :telephone, fax= :fax, mail = :mail, url= :url, logo= :logo, description= :description WHERE id=:id';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':name', $formSubmission['name'], PDO::PARAM_STR);
        $prep->bindValue(':abbreviation', $formSubmission['abbreviation'], PDO::PARAM_STR);
        $prep->bindValue(':address', $formSubmission['address'], PDO::PARAM_STR);
        $prep->bindValue(':telephone', $formSubmission['telephone'], PDO::PARAM_STR);
        $prep->bindValue(':fax', $formSubmission['fax'], PDO::PARAM_STR);
        $prep->bindValue(':mail', $formSubmission['mail'], PDO::PARAM_STR);
        $prep->bindValue(':url', $formSubmission['url'], PDO::PARAM_STR);
        $prep->bindValue(':logo', $formSubmission['logo'], PDO::PARAM_STR);
        $prep->bindValue(':description', $formSubmission['description'], PDO::PARAM_STR);
        $prep->bindValue(':id', $id, PDO::PARAM_INT);
        $prep->execute();
        header("Location: asso.php?id=$id");
        exit();
    }
}

?>

<form class='formulaireAsso' action='' method="POST">
    <fieldset class="field">
        <legend>Modifier une association</legend>
        <div  class="form">
            <div class="fieldAsso">
                <label for="name">NAME:</label>
                <input type="text" id="name" name="name" autocomplete REQUIRED value=<?= $association['name'];?> >
            </div>
            <div class="fieldAsso">
                <label for="address">ADDRESS:</label>
                <input type="text" id="address" name="address" autocomplete value=<?= $association['address'];?> >
            </div>
            <div class="fieldAsso">
                <label for="telephone">TELEPHONE:</label>
                <input type="tel" id="telephone" name="telephone" autocomplete value=<?= $association['telephone'];?> >
            </div>
            <div class="fieldAsso">
                <label for="fax">FAX:</label>
                <input type="tel" id="fax" name="fax" autocomplete value=<?= $association['fax'];?> >
            </div>
            <div class="fieldAsso">
                <label for="mail">MAIL:</label>
                <input type="email" id="mail" name="mail" autocomplete value=<?= $association['mail'];?> >
            </div>
            <div class="fieldAsso">
                <label for="url">URL:</label>
                <input type="url" id="url" name="url" autocomplete value=<?= $association['url'];?> >
            </div>
            <div class="fieldAsso">
                <label for="logo">LOGO:</label>
                <input type="text" id="logo" name="logo" autocomplete value=<?= $association['logo'];?> >
            </div>
            <div class="fieldAsso">
                <label for="abbreviation">ABBREVIATION:</label>
                <input type="text" id="abbreviation" name="abbreviation" autocomplete REQUIRED value=<?= $association['abbreviation'];?> >
            </div>
            <div class="fieldAsso">
                <label for="description">DESCRIPTION:</label>
                <textarea id="description" name="description" ><?= $association['description'];?></textarea>
            </div>

        </div>
        <div  class="button">
            <input name="id" type="hidden" value="<?= $id ?> "/>
            <button type="submit" id="submit" name="submitModif">Envoyer</button>
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
