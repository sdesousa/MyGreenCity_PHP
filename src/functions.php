<?php

function trimArray(array $toTrim): array {
    foreach($toTrim as $key => $value) {
        $trimmed[$key] = trim($value);
    }
    return $trimmed;
}

function cleanHtml(array $toClean) {
    foreach($toClean as $key => $value) {
        $clean[$key] = htmlentities($value);
    }
    return $clean;
}

function selectAllAssociations (): array {
    $pdo = new \PDO(DSN, USER, PASS);
    $query = "SELECT * FROM association";
    $statement = $pdo->query($query);
    $associations = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $associations;
}

function errorCheckAssociation(array $association): array {

    $errors = [];
    if (empty($association['name'])) {
        $errors['name'] = "Error name missing";
    }
    if (empty($association['abbreviation'])) {
        $errors['abbreviation'] = "Error abbreviation missing";
    }
    if (strlen($association['name']) > 100) {
        $errors['nameSizeTooLong'] = "Error name too long";
    }
    if (strlen($association['abbreviation']) > 10) {
        $errors['abbreviationSizeTooLong'] = "Error abbreviation too long";
    }
    if (strlen($association['address']) > 255) {
        $errors['addressSizeTooLong'] = "Error address too long";
    }
    if (strlen($association['telephone']) > 14) {
        $errors['telephoneSizeTooLong'] = "Error telephone too long";
    }
    if (strlen($association['telephone']) > 14) {
        $errors['telephoneSizeTooLong'] = "Error telephone too long";
    }
    if (strlen($association['mail']) > 60) {
        $errors['mailSizeTooLong'] = "Error mail too long";
    }
    if (strlen($association['url']) > 60) {
        $errors['mailSizeTooLong'] = "Error mail too long";
    }
    if (strlen($association['logo']) > 20) {
        $errors['logoSizeTooLong'] = "Error logo too long";
    }
    if (!filter_var($association['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mailInvalid'] = "Error email invalid";
    }
    if (!filter_var($association['url'], FILTER_VALIDATE_URL)) {
        $errors['urlInvalid'] = "Error email invalid";
    }

    return $errors;
}
