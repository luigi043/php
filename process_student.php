<!-- process_student.php -->

<?php
require_once 'student_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentDB = new StudentDB();

    // Perform operations based on the form action (add or edit)
    if (isset($_POST['add_student'])) {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $program = $_POST['program'];

        $studentDB->createStudent($name, $number, $email, $program);
    } elseif (isset($_POST['edit_student'])) {
        // Logic for editing student
    }

    header('Location: index.php'); // Redirect to the main page
    exit();
}
?>
