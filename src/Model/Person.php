<?php

namespace Bank\Model;
class Person
{
    protected string $name;
    private string $cpf;

    public function __construct(CPF $cpf, string $name)
    {
        $this->cpf = $cpf->getNumberCPF();
        $this->name = $name;
        $this->validateAccOwnerName($name);
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