<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: authentication.php");
        exit;
    }
    ?>

    <style>
        #center {
            text-align: center;
        }

        #H1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        #B2 , #B1 {
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #B1 {
            background-color: #DC3545;
        }
    </style>
</head>
<body>
<?php
$Student = $_GET["id"];
$Students = include ('../Data/StudentsData.php');

foreach ($Students as $st) {
    if ($st['id'] == $Student) {
        ?>
        <div id="center">
            <h1 id="H1">Student Details</h1>
            <p>Name: <?php echo $st['name'] ?></p>
            <p>Prenom: <?php echo $st['prenom'] ?></p>
            <p>Note: <?php echo $st['note'] ?></p>
            <p>Filier: <?php echo $st['filier'] ?></p>
            <a id="B2" href="UpdateStudentView.php?id=<?php echo $st['id']; ?>">Update Student</a>
            <form method="POST" action="../Service/DeleteStudentService.php">
                <input type="hidden" name="delete" value="<?php echo $st['id']; ?>">
                <button id="B1" type="submit">Delete Student</button>
            </form>
        </div>
        <?php
    }
}
?>
</body>
<?php
include '../utils/Navigation.php';
include '../utils/Footer.php';
?>
</html>
