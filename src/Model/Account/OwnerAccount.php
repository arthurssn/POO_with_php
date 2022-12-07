<?php
namespace Bank\Model\Account;
use Bank\Model\{Person, Address, CPF};

class OwnerAccount extends Person
{
    private Address $address;

    public function __construct(CPF $employeesCpfOwnerAcc, string $employeesNameOwnerAcc, Address $address)
    {
        parent::__construct($employeesCpfOwnerAcc, $employeesNameOwnerAcc);
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}