<?php

namespace Bank\Model\Account;

class CurrentAccount extends Account
{
    public function transferMoney(float $amountMoneyToTransfer, Account $destinationAccount): void
    {
        if (!$this->haveAvailableBalance($amountMoneyToTransfer)) {
            echo "Saldo indisponível";
            return;
        }
        $this->withdrawMoney($amountMoneyToTransfer);
        $destinationAccount->depositMoney($amountMoneyToTransfer);
    }

    public function returnPercentageChargedPerWithdrawal(): float
    {
        return 0.05;
    }
}
