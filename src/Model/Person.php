<?php
namespace Bank\Model;
class Person
{
    private string $cpf;
    protected string $name;

    public function __construct(CPF $employeesCpf, string $employeesName)
    {
        $this->cpf = $employeesCpf->getNumberCPF();
        $this->name = $employeesName;
        $this->validateAccOwnerName($employeesName);
    }

    protected function validateAccOwnerName(string $nameToBeValidated)
    {
        if (strlen($nameToBeValidated) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }
}