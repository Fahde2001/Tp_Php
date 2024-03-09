<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: darkblue;
            overflow: hidden;
            width: 100%;
            position: fixed;
            top: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
        }

        header ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            align-items: center;
            height: 10vh;
        }

        header li {
            margin-right: 20px;
        }

        header a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px;
            transition: background-color 0.3s;
        }

        header a:hover {
            background-color: #555;
        }

        main {
            margin-top: 10vh;
            flex: 1;
            width: 100%;
            max-width: 800px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <ul>
        <li><a href="../View/ListFilierView.php">List filier</a></li>
        <li><a href="../View/AddNewStudentView.php">Add Student</a></li>
        <li><a href="../View/AllStudentsView.php">List All Students</a></li>
    </ul>
</header>


<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
</footer>

</body>
</html>
