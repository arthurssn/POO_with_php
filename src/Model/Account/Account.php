<?php

namespace Bank\Model\Account;

abstract class Account
{
    private static int $numberOfAccountsCreated = 0;
    protected OwnerAccount $ownerAccount;
    protected float $accountBalance;

    public function __construct(OwnerAccount $ownerAccount)
    {
        $this->ownerAccount = $ownerAccount;
        $this->accountBalance = 0;

        self::$numberOfAccountsCreated++;
    }

    public static function getNumberOfAccountsCreated(): int
    {
        return self::$numberOfAccountsCreated;
    }

    public function __destruct()
    {
        self::$numberOfAccountsCreated--;
    }

    public function withdrawMoney(float $amountToWithdraw)
    {
        $percentageChargedPerWithdrawal = 0.05;
        $withdrawalFee = $amountToWithdraw * $this->returnPercentageChargedPerWithdrawal();
        $withdrawnAmount = $amountToWithdraw + $withdrawalFee;
        if (!$this->haveAvailableBalance($withdrawnAmount)) {
            echo "Saldo indisponível";
            return;
        }
        $this->accountBalance -= $withdrawnAmount;
    }

    abstract function returnPercentageChargedPerWithdrawal(): float;

    protected function haveAvailableBalance(float $amountToWithdraw): bool
    {
        return $this->accountBalance > $amountToWithdraw;
    }

    public function depositMoney(float $amountMoneyToDeposit)
    {
        $this->accountBalance += $amountMoneyToDeposit;
    }

    public function getAccountBalance(): float
    {
        return $this->accountBalance;
    }
}
