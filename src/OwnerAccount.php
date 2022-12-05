<?php

class OwnerAccount
{
    private string $cpfOwnerAcc;
    private string $nameOwnerAcc;
    private Address $address;

    public function __construct(CPF $cpfOwnerAcc, string $nameOwnerAcc, Address $address)
    {
        $this->cpfOwnerAcc = $cpfOwnerAcc->getNumberCPF();
        $this->nameOwnerAcc = $nameOwnerAcc;
        $this->address = $address;

    }

    public function getCpfOwnerAcc(): string
    {
        return $this->cpfOwnerAcc;
    }

    public function getNameOwnerAcc(): string
    {
        return $this->nameOwnerAcc;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}