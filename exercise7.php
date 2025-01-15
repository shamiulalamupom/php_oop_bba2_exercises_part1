<?php
/*
 * INSTRUCTIONS:
 * Create a class named BankAccount with the property balance.
 * Add methods deposit($amount) to deposit money, and withdraw($amount)
 * to withdraw money (if the balance is sufficient).
 * Display a message each time an operation is performed.
 */

class BankAccount {
    private float $balance;

    public function __construct(float $initialBalance = 0) {
        $this->balance = $initialBalance;
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
        echo "Deposited: $amount. New balance: $this->balance\n";
    }

    public function withdraw(float $amount): void {
        if ($amount > $this->balance) {
            echo "Insufficient balance to withdraw: $amount. Current balance: $this->balance\n";
        } else {
            $this->balance -= $amount;
            echo "Withdrew: $amount. New balance: $this->balance\n";
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}
$account = new BankAccount(100);

$account->deposit(50);
$account->withdraw(30);
$account->withdraw(150);

echo "Final balance: " . $account->getBalance() . "\n";