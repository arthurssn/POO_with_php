<?php

namespace Bank\Model\Account;

class SavingsAccount extends Account
{
    public function returnPercentageChargedPerWithdrawal(): float
    {
        return 0.03;
    }
}
