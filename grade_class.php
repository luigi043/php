// grade_class.php

class Grade {
private $subjectName;
private $grade;
private $status;

// Construtor
public function __construct($subjectName, $grade) {
$this->subjectName = $subjectName;
$this->grade = $grade;
$this->status = $this->calculateStatus($grade);
}

// Getters
public function getSubjectName() {
return $this->subjectName;
}

public function getGrade() {
return $this->grade;
}

public function getStatus() {
return $this->status;
}

// Método para calcular o status com base na nota
private function calculateStatus($grade) {
return ($grade < 9.5) ? 'Disapproved' : 'Approved';
}
}
