<?php

namespace Bank\Interfaces;

interface CanAuthenticate
{
    public function checkIfCorrectPassword(string $password): bool;
}