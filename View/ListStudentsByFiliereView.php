<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page To List Students</title>
    <?php

    require_once '../Service/ListStudentsByFiliereService.php';
    ?>
</head>
<body>
<?php
$filier = $_GET["code"];

$persons = include('../Data/StudentsData.php');
$filteredStudents = getEtudiant($persons, $filier);
$maxNote = getMaxNote($filteredStudents);
$minNote = getMinNote($filteredStudents);
?>
<h2>List of Students in Filier <?php echo $filier; ?></h2>
<h2>La note max est <?php echo $maxNote; ?></h2>
<h2>La note min est <?php echo $minNote; ?></h2>
<table border="2">
    <thead>
    <tr>
        <th>Name</th>
        <th>Prenom</th>
        <th>Note</th>
        <th>Montion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($filteredStudents as $student) { ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['prenom']; ?></td>
            <td><?php echo $student['note']; ?></td>
            <td><?php echo getMontion($student['note']); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<a href="ListFilierView.php">Back to page list filier </a>
<?php
include '../utils/Navigation.php';
include '../utils/Footer.php';
?>
</body>
</html>
