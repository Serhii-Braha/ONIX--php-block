<?php

class User
{
    public $name;
    public $balance;
    public float $amount = 150;

    function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function printStatus()
    {
        echo "У пользователя " . $this->name . " сейчас на счету " . $this->balance;
    }

    public function giveMoney(string $user, float $amount): string
    {
        if ($amount > $this->balance) {
            return 'Недостаточно средств!' . "<br/>";
        }

        $this->balance -= $amount;
        $user->balance += $amount;
        return "Пользователь " . $this->name . " перечислил " . $amount . " пользователю " . $user->name . "<br/>";
    }
}

$user1 = new User("Max", 100);
$user2 = new User("Anton", 1000);
