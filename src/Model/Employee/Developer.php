<?php

namespace Bank\Model\Employee;

class Developer extends Employee
{
    public function increasesSeniority(): void
    {
        $this->increaseSalary($this->getEmployeeSalary() * 0.75);
    }

    public function calculateBonus(): float
    {
        return 500.0;
    }
}