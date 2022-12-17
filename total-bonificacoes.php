<?php

require_once './autoload.php';

use Bank\Model\Employee\{Developer, Manager, VideoEditor};
use Bank\Service\BonusController;
use Bank\Model\CPF;


$cpf1 = new CPF('123.456.789-11');
$cpf2 = new CPF('123.456.789-12');
$cpf3 = new CPF('123.456.789-13');

$developer = new Developer($cpf1, 'Arthur', 1000);
$manager = new Manager($cpf2, 'Arthur', 2000);
$videoEditor = new VideoEditor($cpf3, 'Arthur', 1500);

$developer->increasesSeniority();

$bonusController = new BonusController();
$bonusController->addEmployeeBonus($developer);
$bonusController->addEmployeeBonus($manager);

echo $bonusController->getTotalBonuses();