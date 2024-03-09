<?php
$Students = include('../Data/StudentsData.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $deleteId = $_POST['delete'];

    $indexToDelete = -1;
    foreach ($Students as $key => $student) {
        if ($student['id'] == $deleteId) {
            $indexToDelete = $key;
            break;
        }
    }
    if ($indexToDelete !== -1) {
        unset($Students[$indexToDelete]);

        file_put_contents('../Data/StudentsData.php', '<?php return ' . var_export($Students, true) . ';');
    } else {
        echo "Student not found.";
    }

    header("Location: ../View/AllStudentsView.php");
    exit();
}
?>
