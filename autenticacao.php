<?php

use Bank\Model\CPF;
use Bank\Model\Employee\Manager;
use Bank\Service\Authenticator;

require_once './autoload.php';

$authenticator = new Authenticator();
$cpf = new CPF('123.456.789-10');
$manager = new Manager($cpf, 'Arthur', 4500);

$authenticator->tryLogin($manager, '123');