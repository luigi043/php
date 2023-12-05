// student_class.php

class Student {
private $name;
private $number;
private $email;
private $program;
private $grades = [];

// Construtor
public function __construct($name, $number, $email, $program) {
$this->name = $name;
$this->number = $number;
$this->email = $email;
$this->program = $program;
}

// Setters
public function addGrade($subjectName, $grade) {
$gradeObj = new Grade($subjectName, $grade);
$this->grades[] = $gradeObj;
}

// Getters
public function getName() {
return $this->name;
}

public function getNumber() {
return $this->number;
}

public function getEmail() {
return $this->email;
}

public function getProgram() {
return $this->program;
}

public function getGrades() {
return $this->grades;
}
}
