<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
    <title>My Green City</title>
    <meta name="author" content="Noms">
    <meta name="description" content="Description">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/green-v2.png"/>
</head>
<body>
<!-- Header / nav -->
<?php
require '../src/variables.php';
require '../src/functions.php';

$activeCheckbox = false;
if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['activeCheckbox']))) {
    $activeCheckbox = $_POST['activeCheckbox'];
} else {
    $activeCheckbox = false;
}
$trimmed = [];
if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['submit']))) {
    $errors = [];
    $trimmed = trimArray($_POST);
    if (empty($trimmed['firstname'])) {
        $errors['firstnameMissing'] = "Error firstname missing";
    }
    if (empty($trimmed['lastname'])) {
        $errors['lastnameMissing'] = "Error lastname missing";
    }
    if (!filter_var($trimmed['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mailInvalid'] = "Error email missing or invalid";
    }
    if (strlen($trimmed['firstname']) > 40) {
        $errors['firstnameTooLong'] = "Error firstname too long";
    }

    if (strlen($trimmed['lastname']) > 40) {
        $errors['lastnameSizeTooLong'] = "Error lastname too long";
    }

    if (count($errors) == 0) {
        $trimmed = cleanHtml($trimmed);
        header("Location: formRedirect.php");
        exit();
    }
}

require 'header.php';

?>
<div class="superposition">
    <h1> MY <span class="Green">Green</span> CITY </h1>
</div>

<!-- Section Action -->
<section class="secAction" id="link_actions">
    <h2> NOS ACTIONS </h2>
    <div class="divAction">
        <?php
        foreach ($actions as $action => $description) {
            ?>
            <div class="action">
                <img class="actionpict" src=<?= $description[0] ?> alt= "Logo d'un bus">
                <p class="actitle"><?= $action ?> <br> <span class="actdescrpt"> <?= $description[1] ?> </span></p>
            </div>
            <hr class="hrAction">
            <?php
        }
        ?>
    </div>
</section>

<!-- Section Associations -->
<section class="secAssociations" id="link_associations">
    <h2>ASSOCIATIONS</h2>
    <div class="assosLinks">
        <?php foreach ($associations as $shortName => $informations) {
            ?>
            <div class="divAssPict">
                <a href="<?= 'asso.php?name=' . $informations['name']
                . '&address=' . $informations['address']
                . '&telephone=' . $informations['telephone']
                . '&fax=' . $informations['fax']
                . '&mail=' . $informations['mail']
                . '&url=' . $informations['url']
                . '&logo=' . $informations['logo']
                . '&shortName=' . $shortName ?>">
                    <img class="<?= $informations['classLogo'] ?>" src="<?= $informations['logo'] ?>"
                         alt="<?= $informations['name'] ?>">
                </a>
                <p class="assosNames"> <?= $informations['name'] ?></p>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<!-- Gestion des déchets -->
<?php require 'gestion.php' ?>

<!-- Section Formulaire -->
<?php $includeForm = 'form.php'; ?>
<?php if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['submitCheckbox']))) {
    if ($_POST['submitCheckbox']) {
        $includeForm = 'formUnrequired.php';
    }
} ?>
<?php require $includeForm; ?>

<!-- Footer -->
<?php require 'footer.php'; ?>

</body>
</html>
