<?php

class CPF
{
    private string $numberCPF;

    public function __construct(string $numberCPF)
    {
        $this->numberCPF = $numberCPF;
        $this->validateAccOwnerCPF($numberCPF);
    }

    private function validateAccOwnerCPF(string $numberCPF)
    {
        $numberCPF = filter_var($numberCPF, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($numberCPF === false) {
            echo "Número de CPF inválido";
            exit();
        }
        $this->numberCPF = $numberCPF;
    }

    public function getNumberCPF(): string
    {
        return $this->numberCPF;
    }
}