<?php

namespace Bank\Model\Employee;

class Manager extends Employee
{
    public function calculateBonus(): float
    {
        return $this->getEmployeeSalary() * 2;
    }
}