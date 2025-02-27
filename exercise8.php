<?php

/**
 * INSTRUCTIONS:
 * Create a class named Student that extends Person, with the following property:
 * - grades (an array of grades).
 * Add a getAverage() method that returns the average of the grades.
 * Implement getters and setters to manage the grades array.
 */

require_once 'exercise2.php';

class Student extends Person {
    private array $grades;

    public function __construct(string $first_name, string $last_name, int $age, array $grades = []) {
        parent::__construct($first_name, $last_name, $age);
        $this->setGrades($grades);
    }

    public function getGrades(): array {
        return $this->grades;
    }

    public function setGrades(array $grades): void {
        $this->grades = $grades;
    }

    public function getAverage(): float {
        if (empty($this->grades)) {
            return 0;
        }
        $total = array_sum($this->grades);
        return $total / count($this->grades);
    }
}

$student = new Student("Shamiul", "Alam", 24, [90, 80, 70, 85]);
echo "Full Name: " . $student->displayInfos() . "<br>";
var_dump($student->getGrades());
$student->setGrades([100, 95, 85]);

echo "Average grade: " . $student->getAverage();
