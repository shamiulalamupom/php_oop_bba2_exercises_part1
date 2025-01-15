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
$movie = new Movie("Inception", "Sci-Fi", 13);

echo "Title: " . $movie->title . "\n";
echo "Genre: " . $movie->genre . "\n";
echo "Age Restriction: " . $movie->ageRestriction . "\n";

$viewerAge = 15;
if ($movie->canWatch($viewerAge)) {
    echo "Viewer of age $viewerAge can watch the movie.\n";
} else {
    echo "Viewer of age $viewerAge cannot watch the movie.\n";
}

$viewerAge = 12;
if ($movie->canWatch($viewerAge)) {
    echo "Viewer of age $viewerAge can watch the movie.\n";
} else {
    echo "Viewer of age $viewerAge cannot watch the movie.\n";
}