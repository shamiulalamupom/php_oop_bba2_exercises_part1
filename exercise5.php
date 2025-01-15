<?php

/**
 * INSTRUCTIONS:
 * Write a class named Math.
 * Add static methods add(), subtract(), and multiply().
 * Use these methods to perform mathematical operations on two numbers.
 */

class Math {
    public static function add(float $a, float $b): float {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float {
        return $a * $b;
    }
}
echo Math::add(5.5, 2.3);
echo Math::subtract(5.5, 2.3);
echo Math::multiply(5.5, 2.3);
