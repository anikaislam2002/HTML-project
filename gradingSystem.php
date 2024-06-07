<?php
class Student {
    public $name;
    public $marks;

    public function __construct($name, $marks) {
        $this->name = $name;
        $this->marks = $marks;
    }

    
    public function calculateAverage() {
        $totalMarks = array_sum($this->marks);
        return $totalMarks / count($this->marks);
    }


    public function determineGrade($average) {
        if ($average >= 90) {
            return 'A';
        } elseif ($average >= 80) {
            return 'B';
        } elseif ($average >= 70) {
            return 'C';
        } elseif ($average >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    
    public function getGrade() {
        $average = $this->calculateAverage();
        return $this->determineGrade($average);
    }
}


$students = array(
    new Student("Anika", array(85, 92, 78)),
    new Student("Burak", array(58, 65, 72)),
    new Student("Hayat", array(90, 93, 87))
);

foreach ($students as $student) {
    $average = $student->calculateAverage();
    $grade = $student->getGrade();
    echo "Student: " . $student->name . "\n";
    echo "Average Marks: " . $average . "\n";
    echo "Grade: " . $grade . "\n\n";
}
?>
