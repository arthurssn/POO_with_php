<?php

namespace Bank\Model\Employee;

use Bank\Model\{CPF, Person};

abstract class Employee extends Person
{
    private float $employeeSalary;

    public function __construct(CPF $cpf, string $name, float $employeeSalary)
    {
        parent::__construct($cpf, $name);
        $this->employeeSalary = $employeeSalary;
    }

    public function getEmployeeSalary(): float
    {
        return $this->employeeSalary;
    }

    public function setEmployeesName(string $newName)
    {
        $this->validateAccOwnerName($newName);
        $this->name = $newName;
    }

    public function increaseSalary($salaryIncreaseAmount)
    {
        if ($salaryIncreaseAmount < 0) {
            echo "Aumento deve ser positivo";
            return;
        }
        $this->employeeSalary += $salaryIncreaseAmount;
    }

    abstract public function calculateBonus(): float;
}