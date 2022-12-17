<?php

namespace Bank\Model\Account;

use Bank\Model\{Person, Address, CPF};

class OwnerAccount extends Person
{
    private Address $address;

    public function __construct(CPF $cpfOwnerAcc, string $nameOwnerAcc, Address $address)
    {
        parent::__construct($cpfOwnerAcc, $nameOwnerAcc);
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}