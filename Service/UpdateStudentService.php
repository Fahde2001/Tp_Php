<?php
$Students = include('../Data/StudentsData.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updatedStudent = array(
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'prenom' => $_POST['prenom'],
        'note' => $_POST['note'],
        'filier' => $_POST['filier']
    );

    $updated = false;

    foreach ($Students as $key => $student) {
        if ($student['id'] == $updatedStudent['id']) {
            $Students[$key] = $updatedStudent;
            $updated = true;
            break;
        }
    }
    if (!$updated) {
        $Students[] = $updatedStudent;
    }
    file_put_contents('../Data/StudentsData.php', '<?php return ' . var_export($Students, true) . ';');

    header("Location: ../View/AllStudentsView.php");
    exit();
}

?>
