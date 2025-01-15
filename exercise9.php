<?php

/**
 * INSTRUCTIONS:
 * Create a class named Movie with the following properties:
 * - title
 * - genre
 * - ageRestriction
 * Add a method canWatch($viewerAge) that returns true if $viewerAge is
 * greater than or equal to ageRestriction, otherwise false.
 */

class Movie {
    public string $title;
    public string $genre;
    public int $ageRestriction;

    public function __construct(string $title, string $genre, int $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch(int $viewerAge): bool {
        return $viewerAge >= $this->ageRestriction;
    }
}
