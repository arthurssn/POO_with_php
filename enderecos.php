<?php

use Bank\Model\Address;

require_once './autoload.php';

$firstAdd = new Address('Imperatriz', 'Santa Ines', 'Rua', '123');
$secondAdd = new Address('Acailandia', 'Bom Jardim', 'Qualquer rua', '321');

$firstAdd->city = 'nome da cidade';
echo $firstAdd->getCity();