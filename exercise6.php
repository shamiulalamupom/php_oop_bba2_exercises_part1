<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named ShoppingCart with the following properties:
 * - items (as an array)
 * - total
 * Implement a method to add items to the cart (each item will be in an array with name and price).
 * Implement a method to display all items.
 * Implement a method to calculate the total cost.
 */

class ShoppingCart {
    private array $items = [];
    private float $total = 0.0;

    public function addItem(string $name, float $price): void {
        $this->items[] = ['name' => $name, 'price' => $price];
        $this->calculateTotal();
    }

    public function displayItems(): void {
        foreach ($this->items as $item) {
            echo "Item: {$item['name']}, Price: {$item['price']}<br>";
        }
    }

    private function calculateTotal(): void {
        $this->total = 0.0;
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
    }

    public function getTotal(): float {
        return $this->total;
    }
}
