<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page with HTML Header and Image</title>


</head>
<body>
<?php
$filiere = ["SDDI4" => 1, "Civil" => 2, "RS" => 3];
?>
<h1>Affichage des résultats</h1>
<p>Cliquez sur une filiere pour voir les résultats</p>
<ol start="1">
    <?php
    foreach ($filiere as $filiereName => $value) {
        echo "<li><a href='ListStudentsByFiliereView.php?code=$value'>$filiereName</a></li>";
    }
    ?>
</ol>
</body>
<?php
include '../utils/Navigation.php';

?>
</html>
