<?php

namespace Bank\Model;
class Employee extends Person
{
    private string $office;

    public function __construct(CPF $cpf, string $name, string $office)
    {
        parent::__construct($cpf, $name);
        $this->office = $office;
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

}