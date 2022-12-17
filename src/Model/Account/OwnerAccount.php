<?php

namespace Bank\Model\Account;

use Bank\Interfaces\CanAuthenticate;
use Bank\Model\{Person, Address, CPF};

class OwnerAccount extends Person implements CanAuthenticate
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

    public function checkIfCorrectPassword(string $password): bool
    {
        return $password = '321';
    }
}