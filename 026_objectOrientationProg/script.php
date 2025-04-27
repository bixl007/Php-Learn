<?php
class Marks {
    public $marks = 0;
    public $grade = 'F';

    public function __construct($marks) {
        $this->marks = $marks;
        $this->setGrade();
    }

    private function setGrade() {
        if ($this->marks >= 90) {
            $this->grade = 'A';
        } elseif ($this->marks >= 80) {
            $this->grade = 'B';
        } elseif ($this->marks >= 70) {
            $this->grade = 'C';
        } elseif ($this->marks >= 60) {
            $this->grade = 'D';
        } else {
            $this->grade = 'F';
        }
    }
    public function getGrade() {
        return $this->grade;
    }
}

$marks = new Marks(85);
echo "Marks: " . $marks->marks . "<br>";
echo "Grade: " . $marks->getGrade() . "<br>";


?>