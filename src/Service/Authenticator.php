<?php

namespace Bank\Service;

use Bank\Interfaces\CanAuthenticate;

class Authenticator
{
    public function tryLogin(CanAuthenticate $canAuthenticate, string $password): void
    {
        if ($canAuthenticate->checkIfCorrectPassword($password)) {
            echo "Usuário logado no sistema";
        } else {
            echo "Senha Incorreta";
        }
    }
}