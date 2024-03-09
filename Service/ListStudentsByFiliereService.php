<?php
function getEtudiant($persons, $filierA) {
    $filteredEtudiant = array();

    foreach ($persons as $person) {
        if ($person["filier"] == $filierA) {
            $filteredEtudiant[] = $person;
        }
    }

    return $filteredEtudiant;
}

function getMinNote($persons) {
    $minNote = PHP_INT_MAX;
    foreach ($persons as $person) {
        $minNote = min($minNote, $person["note"]);
    }

    return $minNote;
}

function getMaxNote($persons) {
    $maxNote = PHP_INT_MIN;
    foreach ($persons as $person) {
        $maxNote = max($maxNote, $person["note"]);
    }

    return $maxNote;
}

function getMontion($note) {
    if (10 <= $note && $note < 12) {
        return "Passable";
    } elseif (12 <= $note && $note < 14) {
        return "Assez Bien";
    } elseif (14 <= $note && $note < 16) {
        return "Bien";
    } elseif (16 <= $note && $note <= 20) {
        return "Très Bien";
        } elseif (10 > $note) {
        return "redouble";
    }
}
?>
