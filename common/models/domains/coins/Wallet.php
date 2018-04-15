<?php

namespace common\models\domains\coins;

/**
 * Class Wallet.
 *
 * @package common\models\domains\coins
 */
class Wallet implements WalletInterface
{
    /** @var float */
    protected $money;

    public function addMoney(float $sum): float
    {
        $this->money += $sum;

        return $this->money;
    }

    public function lockMoney(float $sum): float
    {
        $this->money += $sum;

        return $this->money;
    }

    public function spendMoney(int $transaction_id): float
    {
        // TODO: Implement spendMoney() method.
    }

    public function unlockMoney(int $transaction_id): float
    {
        // TODO: Implement unlockMoney() method.
    }
}
