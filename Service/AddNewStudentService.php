<?php
$Students = include('../Data/StudentsData.php');

$maxId = -1;
foreach ($Students as $student) {
    if ($student['id'] > $maxId) {
        $maxId = $student['id'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NewStudent = array(
        'id' => $maxId + 1,
        'name' => $_POST['name'],
        'prenom' => $_POST['prenom'],
        'note' => $_POST['note'],
        'filier' => $_POST['filier'],
    );
    $Students[] = $NewStudent;
    file_put_contents('../Data/StudentsData.php', '<?php return ' . var_export($Students, true) . ';');

    header("Location: ../View/AllStudentsView.php");
    exit();
}
?>
