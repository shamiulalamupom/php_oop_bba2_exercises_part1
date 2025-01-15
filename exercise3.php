<?php

/**
 * INSTRUCTIONS:
 * Import the file from exercise2 to have access to the Person class.
 * Write a class named Employee that inherits from the Person class,
 * and adds the properties salary and position.
 * Override the constructor and call the parent constructor.
 * Override the displayInfos() method to display the salary and position.
 */

require_once 'exercise2.php';

class Employee extends Person {
    private float $salary;
    private string $position;

    public function __construct(string $name, int $age, float $salary, string $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function displayInfos(): void {
        parent::displayInfos();
        echo "Salary: " . $this->salary . "<br>";
        echo "Position: " . $this->position . "<br>";
    }
}
