<?php

namespace Bank\Model\Employee;

use Bank\Model\{CPF, Person};

abstract class Employee extends Person
{
    private string $office;
    private float $employeeSalary;

    public function __construct(CPF $cpf, string $name, string $office, float $employeeSalary)
    {
        parent::__construct($cpf, $name);
        $this->office = $office;
        $this->employeeSalary = $employeeSalary;
    }

    public function getEmployeeSalary(): float
    {
        return $this->employeeSalary;
    }

    public function getOffice(): string
    {
        return $this->office;
    }

    public function setEmployeesName(string $newName)
    {
        $this->validateAccOwnerName($newName);
        $this->name = $newName;
    }

    public function calculateBonus(): float
    {
        return $this->employeeSalary * 0.1;
    }

    public function increaseSalary($salaryIncreaseAmount)
    {
        if ($salaryIncreaseAmount < 0) {
            echo "Aumento deve ser positivo";
            return;
        }
        $this->employeeSalary += $salaryIncreaseAmount;
    }
}