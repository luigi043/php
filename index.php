<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
<h1>Student Management System</h1>

<!-- Display Student Data -->
<h2>Student Data</h2>
<?php
require_once 'student_db.php';

$studentDB = new StudentDB();
$students = $studentDB->readAllStudents();

if (!empty($students)) {
    echo '<ul>';
    foreach ($students as $student) {
        echo '<li>';
        echo 'Name: ' . $student->getName() . '<br>';
        echo 'Number: ' . $student->getNumber() . '<br>';
        echo 'Email: ' . $student->getEmail() . '<br>';
        echo 'Program: ' . $student->getProgram() . '<br>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo 'No students found.';
}
?>

<!-- Display Grade Data -->
<h2>Grade Data</h2>
<?php
require_once 'grade_db.php';

$gradeDB = new GradeDB();
$grades = $gradeDB->readAllGrades();

if (!empty($grades)) {
    echo '<ul>';
    foreach ($grades as $grade) {
        echo '<li>';
        echo 'Student Number: ' . $grade->getStudentNumber() . '<br>';
        echo 'Subject Name: ' . $grade->getSubjectName() . '<br>';
        echo 'Grade: ' . $grade->getGrade() . '<br>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo 'No grades found.';
}
?>
</body>
</html>
