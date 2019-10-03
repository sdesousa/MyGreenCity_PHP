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
