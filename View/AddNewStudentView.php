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

        form {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
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

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="../Service/AddNewStudentService.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="prenom">Prenom:</label>
    <input type="text" name="prenom" required>

    <label for="note">Note:</label>
    <input type="number" name="note" required>

    <label for="filier">Filier:</label>
    <select id="filier" name="filier" required>
        <?php
        $filiere = ["SDDI4" => 1, "Civil" => 2, "RS" => 3];
        foreach ($filiere as $filiereName => $value) {
            echo "<option value='$value'>$filiereName</option>";
        }
        ?>
    </select>

    <button type="submit">Add Student</button>
</form>

<?php include '../utils/Navigation.php'; include '../utils/Footer.php'; ?>
</body>
</html>
