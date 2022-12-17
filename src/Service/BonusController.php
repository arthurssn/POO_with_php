<?php

namespace Bank\Service;

use Bank\Model\Employee\Employee;

class BonusController
{
    private int $totalBonuses = 0;

    public function addEmployeeBonus(Employee $employee): float
    {
        return $this->totalBonuses += $employee->calculateBonus();
    }

    public function getTotalBonuses(): float
    {
        return $this->totalBonuses;
    }
}