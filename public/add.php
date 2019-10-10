<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>My Green City - Ajouter une association</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Manjari" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/green-v2.png" />
</head>

<body>

    <?php
    include 'header.php';
    require_once '../src/functions.php';
    require_once '../connec/connec.php';

    $formSubmission = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $formSubmission = array_map('trim', $_POST);
        $errors = errorCheckAssociation($formSubmission);

        if (empty($errors)) {
            foreach ($formSubmission as $key => $value) {
                $formSubmission[$key] = htmlentities($value);
            }
            $pdo = new \PDO(DSN, USER, PASS);
            $query = "INSERT INTO association(name, abbreviation, address, telephone, fax, mail, url, logo, description) VALUES (:name, :abbreviation, :address, :telephone, :fax, :mail, :url, :logo, :description)";
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
            $prep->execute();
            header("Location: index.php");
            exit();
        }
    }

    ?>

    <form class='formulaireAsso' action='' method="POST">
        <fieldset class="field">
            <legend>Ajouter une association</legend>
            <div  class="form">
                <div class="fieldAsso">
                    <label for="name">NAME:</label>
                    <input type="text" id="name" name="name" autocomplete REQUIRED <?php if(isset($_POST['name'])) echo 'value="' . $_POST['name'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="address">ADDRESS:</label>
                    <input type="text" id="address" name="address" autocomplete <?php if(isset($_POST['address'])) echo 'value="' . $_POST['address'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="telephone">TELEPHONE:</label>
                    <input type="tel" id="telephone" name="telephone" autocomplete <?php if(isset($_POST['telephone'])) echo 'value="' . $_POST['telephone'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="fax">FAX:</label>
                    <input type="tel" id="fax" name="fax" autocomplete <?php if(isset($_POST['fax'])) echo 'value="' . $_POST['fax'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="mail">MAIL:</label>
                    <input type="email" id="mail" name="mail" autocomplete <?php if(isset($_POST['mail'])) echo 'value="' . $_POST['mail'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="url">URL:</label>
                    <input type="url" id="url" name="url" autocomplete <?php if(isset($_POST['url'])) echo 'value="' . $_POST['url'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="logo">LOGO:</label>
                    <input type="text" id="logo" name="logo" autocomplete <?php if(isset($_POST['logo'])) echo 'value="' . $_POST['logo'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="abbreviation">ABBREVIATION:</label>
                    <input type="text" id="abbreviation" name="abbreviation" autocomplete REQUIRED <?php if(isset($_POST['abbreviation'])) echo 'value="' . $_POST['abbreviation'] . '"';?> >
                </div>
                <div class="fieldAsso">
                    <label for="description">DESCRIPTION:</label>
                    <textarea id="description" name="description" ><?php if(isset($_POST['description'])) echo $_POST['description'];?></textarea>
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
