<?php
/*
 * INSTRUCTIONS:
 * Create a Game class with the following protected properties:
 * - name
 * - editor
 * - price
 * Add the getters and setters for each property.
 * Below the class, instantiate a Game and display its information.
*/

class Game {
    protected string $name;
    protected string $editor;
    protected float $price;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getEditor() {
        return $this->editor;
    }

    public function setEditor($editor) {
        $this->editor = $editor;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}

$game = new Game();
$game->setName('The Legend of Zelda: Breath of the Wild');
$game->setEditor('Nintendo');
$game->setPrice(59.99);
echo "Name: " . $game->getName() . " Editor: " . $game->getEditor() . " Price: " . $game->getPrice();