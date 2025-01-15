<?php

/**
 * INSTRUCTIONS:
 * Create a class named Article with the following properties:
 * title
 * content
 * Implement a method getSummary($maxLength) that returns the first $maxLength
 * characters of the content, followed by "…" if the content is longer than $maxLength.
 */

class Article {
    public string $title;
    public string $content;

    public function __construct(string $title, string $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getSummary(int $maxLength): string {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . '…';
        }
        return $this->content;
    }
}
