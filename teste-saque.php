<?php
require_once './autoload.php';

use Bank\Model\{CPF, Address};
use Bank\Model\Account\{OwnerAccount, SavingsAccount};

$cpf = new CPF('123.456.789-10');
$address = new Address(
    'City',
    'Neighborhood',
    'Rua',
    'Number'
);
$titular = new OwnerAccount($cpf, 'Arthur', $address);
$account = new SavingsAccount($titular);

$account->depositMoney(500);
$account->withdrawMoney(100);
echo $account->getAccountBalance();
