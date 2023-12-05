<!-- process_grade.php -->

<?php
require_once 'grade_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gradeDB = new GradeDB();

    // Perform operations based on the form action (add or edit)
    if (isset($_POST['add_grade'])) {
        $studentNumber = $_POST['student_number'];
        $subjectName = $_POST['subjectName'];
        $grade = $_POST['grade'];

        $gradeDB->createGrade($studentNumber, $subjectName, $grade);
    } elseif (isset($_POST['edit_grade'])) {
        // Logic for editing grade
    }

    header('Location: index.php'); // Redirect to the main page
    exit();
}
?>
