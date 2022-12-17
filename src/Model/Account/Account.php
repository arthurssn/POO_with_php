<?php

namespace Bank\Model\Account;
class Account
{
    private static int $numberOfAccountsCreated = 0;
    protected OwnerAccount $ownerAccount;
    private float $accountBalance;

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

    public function transferMoney(float $amountMoneyToTransfer, Account $destinationAccount): void
    {
        if (!$this->haveAvailableBalance($amountMoneyToTransfer)) {
            echo "Saldo indisponível";
            return;
        }
        $this->withdrawMoney($amountMoneyToTransfer);
        $destinationAccount->depositMoney($amountMoneyToTransfer);
    }

    private function haveAvailableBalance(float $amountToWithdraw): bool
    {
        return $this->accountBalance > $amountToWithdraw;
    }

    public function withdrawMoney(float $amountToWithdraw)
    {
        $percentageChargedPerWithdrawal = 0.05;
        $withdrawalFee = $amountToWithdraw * $percentageChargedPerWithdrawal;
        $withdrawnAmount = $amountToWithdraw + $withdrawalFee;
        if (!$this->haveAvailableBalance($withdrawnAmount)) {
            echo "Saldo indisponível";
            return;
        }
        $this->accountBalance -= $withdrawnAmount;
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
