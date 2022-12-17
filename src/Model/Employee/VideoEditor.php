<?php

namespace Bank\Model\Employee;

class VideoEditor extends Employee
{

    public function calculateBonus(): float
    {
        return 600;
    }
}