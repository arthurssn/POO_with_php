<?php

class Person
{
    public string $cpf;
    public string $name;

    public function __construct(CPF $cpf, string $name)
    {
        $this->cpf = $cpf->getNumberCPF();
        $this->name = $name;
        $this->validateAccOwnerName($name);
    }

    private function validateAccOwnerName(string $nameToBeValidated)
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