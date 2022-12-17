<?php

namespace Bank\Model\Employee;

use Bank\Interfaces\CanAuthenticate;

class Manager extends Employee implements CanAuthenticate
{
    public function calculateBonus(): float
    {
        return $this->getEmployeeSalary() * 2;
    }

    public function checkIfCorrectPassword(string $password): bool
    {
        return $password === '123';
    }
}