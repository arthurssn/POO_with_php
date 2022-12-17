<?php

require_once './autoload.php';

use Bank\Model\Employee\{Developer, Manager};
use Bank\Service\BonusController;
use Bank\Model\CPF;


$cpf1 = new CPF('123.456.789-11');
$cpf2 = new CPF('123.456.789-12');
$developer = new Developer($cpf1, 'Arthur', 'Dev', 1000);
$manager = new Manager($cpf2, 'Arthur', 'Dev', 2000);

$developer->increasesSeniority();

$bonusController = new BonusController();
$bonusController->addEmployeeBonus($developer);
$bonusController->addEmployeeBonus($manager);

echo $bonusController->getTotalBonuses();