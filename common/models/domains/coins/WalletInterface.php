<?php

namespace common\models\domains\coins;

interface WalletInterface
{
    public function addMoney(float $sum): float;

    public function lockMoney(float $sum): float;

    public function spendMoney(int $transaction_id): float;

    public function unlockMoney(int $transaction_id): float;
}
