<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named Person with protected properties first_name, last_name, and age.
 * Add a constructor.
 * Add the getters and setters.
 * Add a method displayInfos() to display the person's information.
 * Create a new object and display its information.
 */

class Person {
    protected string $first_name;
    protected string $last_name;
    protected int $age;

    public function __construct(string $first_name, string $last_name, int $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFirstName(): string {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): void {
        $this->first_name = $first_name;
    }

    public function getLastName(): string {
        return $this->last_name;
    }

    public function setLastName(string $last_name): void {
        $this->last_name = $last_name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function displayInfos(): void {
        $full_name = $this->first_name . " " . $this->last_name;
        echo "Full Name: " . $full_name . "\n";
        echo "Age: " . $this->age . "\n";
    }
}

// Create a new object and display its information
$person = new Person("John", "Doe", 30);
$person->displayInfos();

?>