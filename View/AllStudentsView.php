<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>

    <?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: authentication.php");
        exit;
    }
    if(isset($_COOKIE["selected_color"])){
        $setColor=$_COOKIE['selected_color'];
        $color="";
        if($setColor==='black'){
            $color="white";
        }else{
            $color='black';
        }
    }
    require_once '../Service/ListStudentsByFiliereService.php'
    ?>

    <style>
        *{
            color: <?php echo $color ;?>;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>All Students</h1>
<?php

$filiere = ["SDDI4" => 1, "Civil" => 2, "RS" => 3];
$students = include('../Data/StudentsData.php');

?>
<table border="2">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Prenom</th>
        <th>Note</th>
        <th>Mention</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['prenom']; ?></td>
            <td><?php echo $student['note']; ?></td>
            <td><?php echo getMontion($student['note']); ?></td>
            <td>
                <a href="InfoStudentView.php?id=<?php echo $student['id']; ?>">View</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
include '../utils/Navigation.php';
include '../utils/Footer.php';
?>
</body>
</html>
