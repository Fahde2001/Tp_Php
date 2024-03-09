<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
$StudentId = $_GET["id"];
$Students = include('../Data/StudentsData.php');
$selectedStudent = null;
foreach ($Students as $st) {
    if ($st['id'] == $StudentId) {
        $selectedStudent = $st;
        break;
    }
}

if ($selectedStudent) { ?>
    <h1>Update Student</h1>
    <form method="POST" action="../Service/UpdateStudentService.php">
        <input type="hidden" name="id"  value="<?php echo $selectedStudent['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $selectedStudent['name']; ?>" required><br>

        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $selectedStudent['prenom']; ?>" required><br>

        <label for="note">Note:</label>
        <input type="number" id="note" name="note" value="<?php echo $selectedStudent['note']; ?>" required><br>

        <label for="filier">Filiere:</label>
        <select id="filier" name="filier" required>
            <?php
            $filiere = ["SDDI4" => 1, "Civil" => 2, "RS" => 3];
            foreach ($filiere as $filiereName => $value) {
                $selected = ($selectedStudent['filier'] == $value) ? 'selected' : '';
                echo "<option value='$value' $selected>$filiereName</option>";
            }
            ?>
        </select><br>

        <input type="submit" name="submit" value="Update Student">
    </form>
<?php } else {
    echo "Student not found.";
}
?>

<?php include '../utils/Navigation.php'; include '../utils/Footer.php'; ?>
</body>
</html>
